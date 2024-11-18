<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('visitors')->insert([
            ['name' => 'ayam', 'visit_date' => '2021-08-27', 'contact' => '089933442277'],
            ['name' => 'bebek', 'visit_date' => '2021-03-15', 'contact' => '086633449922'],
        ]);
    }
}
