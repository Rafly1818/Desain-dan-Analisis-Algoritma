<?php
namespace Database\Seeders;

use App\Models\Pemilik;
use Illuminate\Database\Seeder;

class PemilikSeeder extends Seeder
{
    public function run()
    {
        Pemilik::create([
            'nama' => 'John Doe',
            'alamat' => 'Jl. Merdeka No.1',
            'telepon' => '081234567890',
        ]);
    }
}
