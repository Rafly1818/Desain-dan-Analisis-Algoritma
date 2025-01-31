<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tugas;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tugas::create([
            'nama_tugas' => 'Membuat Desain UI/UX',
            'deskripsi' => 'Mendesain antarmuka pengguna untuk aplikasi.',
            'deadline' => '2023-11-15',
            'proyek_id' => 1,
            'karyawan_id' => 2, // Ani Wijaya
            'status' => 'Sedang Berjalan',
        ]);
    }
}
