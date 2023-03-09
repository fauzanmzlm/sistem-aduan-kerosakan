<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            // Generate a unique cache key based on the request parameters
            $page = $request->input('page', 1);
            $cacheKey = 'departments_' . md5(json_encode($request->all())) . '_page_' . $page;
            // Set the cache time (seconds)
            $cacheTime = 60;

            $data = Cache::remember($cacheKey, $cacheTime, function () use ($request) {
                $query = DB::table('departments')
                    ->select('id', 'name', 'short_name', 'code', 'status');

                // Apply sorting
                $sortColumn = $request->input('order.0.column');
                $sortDirection = $request->input('order.0.dir');
                $columns = ['name', 'short_name', 'code', 'status'];
                $column = $columns[$sortColumn];
                $query->orderBy($column, $sortDirection);

                // Apply search filter
                $searchValue = $request->input('search.value');
                if ($searchValue) {
                    $status = null;
                    if ($searchValue == "active") {
                        $status = 1;
                    } else if ($searchValue == "inactive") {
                        $status = 0;
                    }

                    $query->where(function ($query) use ($searchValue, $status) {
                        $query->where('name', 'like', "%{$searchValue}%")
                            ->orWhere('short_name', 'like', "%{$searchValue}%")
                            ->orWhere('code', 'like', "%{$searchValue}%")
                            ->when($status !== null, function ($query) use ($status) {
                                $query->orWhere('status', $status);
                            });
                    });
                }

                // Get total number of records
                $total = $query->count();

                // Apply pagination
                $length = $request->input('length', 10);
                $data = $query->paginate($length);
                
                // Add custom column to DataTables JSON response
                collect($data->items())->map(function ($row) {

                    // check status
                    if ($row->status == 1) {
                        $status = '<label class="badge badge-success">Active</label>';
                    } else if ($row->status == 0) {
                        $status = '<label class="badge badge-danger">Inactive</label>';
                    } else {
                        $status = '<label class="badge badge-warning">Error: Unknown Status</label>';
                    }

                    // add status column
                    $row->status = $status;

                    $editButton = view('components.edit-button', [
                        'route' => route('departments.edit', $row->id)
                    ])->render();
                    $deleteButton = view('components.delete-button', [
                        'route' => route('departments.edit', $row->id)
                    ])->render();
                    
                    // add action column
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

        $pageTitle = "Manage Departments";
        $pageDescription = "This page allows users to modify department details, including name, code and others. Users can add, update, or delete departments.";

        return view('department.index', [
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
        $pageTitle = "Create Department";
        $pageDescription = "This page allows users to create department.";

        return view('department.create', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentRequest $request)
    {
        DB::beginTransaction();

        try {

            $department = Department::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'short_name' => $request->short_name,
                'code' => $request->code
            ]);

            DB::commit();

            return back()->with([
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
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $pageTitle = "Edit Department";
        $pageDescription = "This page allows users to edit department details.";

        $statusOptions = Department::STATUS;

        return view('department.edit', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'department' => $department,
            'statusOptions' => $statusOptions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        DB::beginTransaction();

        try {

            $department->name = $request->name;
            $department->slug = Str::slug($request->name);
            $department->short_name = $request->short_name;
            $department->code = $request->code;
            $department->status = $request->status;
            $department->save();

            DB::commit();

            return back()->with([
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
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        DB::beginTransaction();

        try {
            $department->delete();

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
