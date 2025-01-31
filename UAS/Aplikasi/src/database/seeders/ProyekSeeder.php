<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyek;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyek::create([
            'nama_proyek' => 'Pengembangan Aplikasi Manajemen Tugas',
            'deskripsi' => 'Membuat aplikasi untuk manajemen tugas dan proyek.',
            'deadline' => '2023-12-31',
            'manajer_proyek_id' => 1, // Budi Santoso
        ]);
    }
}
