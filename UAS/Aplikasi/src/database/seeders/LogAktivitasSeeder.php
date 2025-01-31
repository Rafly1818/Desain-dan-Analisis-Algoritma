<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LogAktivitas;

class LogAktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data log aktivitas
        LogAktivitas::create([
            'tipe' => 'Login',
            'aktivitas' => 'Admin berhasil login ke sistem.',
            'karyawan_id' => 1, // ID karyawan yang melakukan aktivitas
            'waktu_aktivitas' => now(),
        ]);

        LogAktivitas::create([
            'tipe' => 'Tugas Dibuat',
            'aktivitas' => 'Tugas "Membuat Desain UI/UX" telah dibuat.',
            'karyawan_id' => 2, // ID karyawan yang melakukan aktivitas
            'waktu_aktivitas' => now(),
        ]);

        LogAktivitas::create([
            'tipe' => 'Proyek Selesai',
            'aktivitas' => 'Proyek "Pengembangan Aplikasi Manajemen Tugas" telah selesai.',
            'karyawan_id' => 1, // ID karyawan yang melakukan aktivitas
            'waktu_aktivitas' => now(),
        ]);
    }
}
