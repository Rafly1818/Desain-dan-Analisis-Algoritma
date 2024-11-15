<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        Kendaraan::create([
            'pemilik_id' => 1,
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'nomor_polisi' => 'B1234XYZ',
            'tahun' => 2020,
        ]);
    }
}
