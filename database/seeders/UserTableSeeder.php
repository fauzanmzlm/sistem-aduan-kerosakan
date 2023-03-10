<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data user
        $userCreate = User::create([
            'name'      => 'Muhammad Fauzan',
            'username'      => 'fauzanmzlm',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('123'),
            'account_status_id' => 2,
        ]);

        //assign permission to role
        $role = Role::find(1);
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        //assign role with permission to user
        $user = User::find(1);
        $user->assignRole($role->name);


        // Add code to seed the users table
        for ($i = 1; $i <= 10000; $i++) {
            DB::table('users')->insert([
                'name' => 'User '.$i,
                'username' => 'Username '. $i,
                'email' => 'user'.$i.'@example.com',
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'account_status_id' => 2,
            ]);
        }
    }
}
