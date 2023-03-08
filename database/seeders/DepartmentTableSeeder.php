<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id'=>'01', 'code' => '001', 'name'=>'Jabatan Kejuruteraan Elektrik', 'slug'=>'jabatan-kejuruteraan-elektrik', 'short_name'=>'JKE', 'status' => 1],
            ['id'=>'02', 'code' => '002', 'name'=>'Unit Latihan Dan Pendidikan Lanjutan', 'slug'=>'unit-latihan-dan-pendidikan-lanjutan', 'short_name'=>'ULPL', 'status' => 0],
            ['id'=>'03', 'code' => '003', 'name'=>'Unit Pengurusan Psikologi', 'slug'=>'unit-pengurusan-psikologi', 'short_name'=>'UPP', 'status' => 1],
            ['id'=>'04', 'code' => '004', 'name'=>'Unit Perpustakaan', 'slug'=>'unit-perpustakaan', 'short_name'=>'UP', 'status' => 0],
            ['id'=>'05', 'code' => '005', 'name'=>'Unit Sukan, Kokurikulum & Kebudayaan', 'slug'=>'unit-sukan-kokurikulum-kebudayaan', 'short_name'=>'USKK', 'status' => 1],
            ['id'=>'06', 'code' => '006', 'name'=>'Unit Intruksional Dan Pembangunan Multimedia', 'slug'=>'unit-intruksional-dan-pembangunan-multimedia', 'short_name'=>'UIPM', 'status' => 1],
            ['id'=>'07', 'code' => '007', 'name'=>'Unit Pembangunan Dan Senggaraan', 'slug'=>'unit-pembangunan-dan-senggaraan', 'short_name'=>'UPS', 'status' => 1],
            ['id'=>'08', 'code' => '008', 'name'=>'Unit Penyelidikan Dan Inovasi', 'slug'=>'unit-penyelidikan-dan-inovasi', 'short_name'=>'UPI', 'status' => 1],
            ['id'=>'09', 'code' => '009', 'name'=>'Pasukan Inspektorat Dalaman', 'slug'=>'pasukan-inspektorat-dalaman', 'short_name'=>'PID', 'status' => 0],
            ['id'=>'10', 'code' => '010', 'name'=>'Unit Kecemerlangan Akademik', 'slug'=>'unit-kecemerlangan-akademik', 'short_name'=>'IKA', 'status' => 1],
            ['id'=>'11', 'code' => '011', 'name'=>'Jabatan Matematik, Sains Dan Komputer', 'slug'=>'jabatan-matematik-sains-dan-komputer', 'short_name'=>'JMSK', 'status' => 1],
            ['id'=>'12', 'code' => '012', 'name'=>'Jabatan Teknologi Maklumat Dan Komunikasi', 'slug'=>'jabatan-teknologi-maklumat-dan-komunikasi', 'short_name'=>'JTMK', 'status' => 1],
            ['id'=>'13', 'code' => '013', 'name'=>'Jabatan Pengajian Am', 'slug'=>'jabatan-pengajian-am', 'short_name'=>'JPA', 'status' => 1],
            ['id'=>'14', 'code' => '014', 'name'=>'Jabatan Hal Ehwal Dan Pembangunan Pelajar', 'slug'=>'jabatan-hal-ehwal-dan-pembangunan-pelajar', 'short_name'=>'JHHPP', 'status' => 1],
            ['id'=>'15', 'code' => '015', 'name'=>'Unit Pentadbiran Dan Kewangan', 'slug'=>'unit-pentadbiran-dan-kewangan', 'short_name'=>'UPK', 'status' => 1],
            ['id'=>'16', 'code' => '016', 'name'=>'Unit Sistem Maklumat', 'slug'=>'unit-sistem-maklumat', 'short_name'=>'USM', 'status' => 1],
            ['id'=>'17', 'code' => '017', 'name'=>'Unit Peperiksaan', 'slug'=>'unit-peperiksaan', 'short_name'=>'UPPR', 'status' => 1],
            ['id'=>'18', 'code' => '018', 'name'=>'Unit Perhubungan Dan Latihan Industri', 'slug'=>'unit-perhubungan-dan-latihan-industri', 'short_name'=>'UPLI', 'status' => 1],
        ];

        Department::insert($items);
    }
}
