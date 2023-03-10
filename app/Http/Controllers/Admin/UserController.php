<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:users.index|users.create|users.edit|users.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            // Generate a unique cache key based on the request parameters
            $page = $request->input('page', 1);
            $cacheKey = 'users_' . md5(json_encode($request->all())) . '_page_' . $page;
            // Set the cache time (seconds)
            $cacheTime = 60;

            $data = Cache::remember($cacheKey, $cacheTime, function () use ($request) {
                $query = DB::table('users')
                    ->select('id', 'name', 'email', 'created_at', 'updated_at');

                // Apply sorting
                $sortColumn = $request->input('order.0.column');
                $sortDirection = $request->input('order.0.dir');
                $columns = ['name','email','created_at','updated_at'];
                $column = $columns[$sortColumn];
                $query->orderBy($column, $sortDirection);

                // Apply search filter
                $searchValue = $request->input('search.value');
                if ($searchValue) {
                    $query->where(function ($query) use ($searchValue) {
                        $query->where('name', 'like', "%{$searchValue}%")
                            ->orWhere('email', 'like', "%{$searchValue}%")
                            ->orWhere('created_at', 'like', "%{$searchValue}%")
                            ->orWhere('updated_at', 'like', "%{$searchValue}%");
                    });
                }

                // Get total number of records
                $total = $query->count();

                // Apply pagination
                $length = $request->input('length', 10);
                $data = $query->paginate($length);

                // Add custom column to DataTables JSON response
                collect($data->items())->map(function ($row) {

                    // // Get all permissions that beongs to the role
                    // $permissions = DB::table('permissions')
                    //     ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    //     ->where('role_has_permissions.role_id', '=', $row->id)
                    //     ->select('permissions.*')
                    //     ->get();
                    
                    // // Add permissions column
                    // $row->permissions = "";
                    // $row->permissions .= '<div class="d-flex flex-wrap">';
                    // foreach ($permissions as $permission) {
                    //     $row->permissions .= '<label class="badge badge-success mb-1 mt-1 mr-1">'. $permission->name .'</label>';
                    // }
                    // $row->permissions .= '</div>';

                    // Add role column
                    $row->role = "";
                    $row->role .= '<div class="d-flex flex-wrap">';
                    $row->role .= '<label class="badge badge-success mb-1 mt-1 mr-1">Admin</label>';
                    // foreach ($permissions as $permission) {
                    //     $row->permissions .= '<label class="badge badge-success mb-1 mt-1 mr-1">'. $permission->name .'</label>';
                    // }
                    $row->role .= '</div>';
                    
                    $row->status = '<label class="badge badge-success">Active</label>';
                    
                    // Get action button HTML
                    $editButton = view('components.edit-button', [
                        'route' => route('admin.users.edit', $row->id)
                    ])->render();
                    $deleteButton = view('components.delete-button', [
                        'route' => route('admin.users.destroy', $row->id)
                    ])->render();
                    
                    // Add action column
                    $row->action = $editButton . $deleteButton;

                    return $row;
                });

                // Return data in DataTables format
                return [
                    'data' => $data->items(),
                    'recordsTotal' => $total,
                    'recordsFiltered' => $data->total(),
                    'currentPage' => $data->currentPage(),
                    'lastPage' => $data->lastPage(),
                ];
            });

            return response()->json($data);
        }

        $pageTitle = "Manage Users";
        $pageDescription = "This page allows users to modify user details, including name and others. Users can add, update, or delete users.";

        return view('admin.user.index', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create Role";
        $pageDescription = "This page allows users to create role.";

        $permissions = Permission::latest()->get();

        return view('admin.role.create', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        DB::beginTransaction();

        try {

            // Store role
            $role = Role::create([
                'name' => $request->input('name')
            ]);

            // Assign permission to role
            $role->syncPermissions($request->input('permissions'));

            DB::commit();

            return redirect()->route('admin.roles.index')->with([
                'status' => 'success',
                'message' => 'Data added successfully'
            ], 200);

        } catch(\Exception $e) {

            DB::rollback();

            return back()->with([
                'status' => 'error',
                'message' => 'Failed to add data: ' . $e->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $pageTitle = "Edit Role";
        $pageDescription = "This page allows users to edit role details.";

        $permissions = Permission::latest()->get();

        return view('admin.role.edit', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \Spatie\Permission\Models\Role        $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, Role $role)
    {
        DB::beginTransaction();

        try {

            // update data
            $role->name = $request->name;
            $role->save();

            //assign permission to role
            $role->syncPermissions($request->input('permissions'));

            DB::commit();

            return redirect()->route('admin.roles.index')->with([
                'status' => 'success',
                'message' => 'Data updated successfully'
            ], 200);

        } catch(\Exception $e) {

            DB::rollback();

            return back()->with([
                'status' => 'error',
                'message' => 'Failed to update data: ' . $e->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        DB::beginTransaction();

        try {
            $permissions = $role->permissions;
            $role->revokePermissionTo($permissions);
            $role->delete();

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Data deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete data: ' . $e->getMessage()
            ], 400);
        }
    }
}
