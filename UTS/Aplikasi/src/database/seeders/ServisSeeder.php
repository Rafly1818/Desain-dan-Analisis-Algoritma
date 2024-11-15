<?php

namespace Database\Seeders;

use App\Models\Servis;
use Illuminate\Database\Seeder;

class ServisSeeder extends Seeder
{
    public function run()
    {
        Servis::create([
            'nama_servis' => 'Servis Berkala',
            'deskripsi' => 'Servis rutin setiap 6 bulan',
        ]);
    }
}
