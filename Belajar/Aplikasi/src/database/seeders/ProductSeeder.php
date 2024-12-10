<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        [
            'Nama Produk' => 'Adidas',
            'Harga Produk' => 1000,
            'Kategori Produk' => 'Sepatu',
        ],
        [
            'Nama Produk' => 'Nike',
            'Harga Produk' => 999,
            'Kategori Produk' => 'Sepatu',
        ],    
        [
            'Nama Produk' => 'Levis',
            'Harga Produk' => 500,
            'Kategori Produk' => 'Celana',
        ],
        [
            'Nama Produk' => 'Uniqlo',
            'Harga Produk' => 100,
            'Kategori Produk' => 'Baju',
        ],
        
        ]);
    }
}
