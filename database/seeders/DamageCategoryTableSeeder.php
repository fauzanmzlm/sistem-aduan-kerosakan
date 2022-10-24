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
            'name' => 'Kerosakan yang boleh dibaiki terus'
        ]);

        DamageCategory::create([
            'name' => 'Kerosakan yang boleh dibaiki tetapi memerlukan perolehan alat ganti'
        ]);

        DamageCategory::create([
            'name' => 'Kerosakan yang perlu dibaiki oleh pembekal luar'
        ]);

        DamageCategory::create([
            'name' => 'Kerosakan yang tidak ekonomi untuk dibaiki'
        ]);
    }
}
