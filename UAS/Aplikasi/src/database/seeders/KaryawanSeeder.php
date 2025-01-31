<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@prodactiva.com',
            'posisi' => 'Manajer Proyek',
            'keterampilan' => 'Manajemen Proyek, Analisis Data',
            'skor_produktivitas' => 9,
        ]);

        Karyawan::create([
            'nama' => 'Ani Wijaya',
            'email' => 'ani@prodactiva.com',
            'posisi' => 'Staff',
            'keterampilan' => 'Pengembangan Software, Manajemen Waktu',
            'skor_produktivitas' => 8,
        ]);
    }
}
