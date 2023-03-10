<?php

namespace Database\Seeders;

use App\Models\AccountStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountStatus::insert([
            [
                'id'=>'1', 
                'code'=>'0',
                'name'=>'Inactive',
                'colour'=> 'danger'
            ], [
                'id'=>'2', 
                'code'=>'1',
                'name'=>'Active',
                'colour'=> 'success'
            ], [
                'id'=>'3', 
                'code'=>'2',
                'name'=>'Blocked',
                'colour'=> 'dark'
            ]
        ]);
    }
}
