<?php

namespace Database\Seeders;

use App\Models\DamageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DamageCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DamageCategory::create([
            'number' => 'a',
            'name' => 'Kerosakan yang boleh dibaiki terus'
        ]);

        DamageCategory::create([
            'number' => 'b',
            'name' => 'Kerosakan yang boleh dibaiki tetapi memerlukan perolehan alat ganti'
        ]);

        DamageCategory::create([
            'number' => 'c',
            'name' => 'Kerosakan yang perlu dibaiki oleh pembekal luar'
        ]);

        DamageCategory::create([
            'number' => 'd',
            'name' => 'Kerosakan yang tidak ekonomi untuk dibaiki'
        ]);
    }
}
