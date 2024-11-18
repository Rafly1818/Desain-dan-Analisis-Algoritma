<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('borrowings')->insert([
            [
                'visitor_id' => 1,
                'name' => 'ayam',
                'book_id' => 1,
                'borrow_date' => '1998-09-22',
                'return_date' => '2010-08-11',
                'late_fees' => 1000.00,
            ],
            [
                'visitor_id' => 2,
                'name' => 'bebek',
                'book_id' => 2,
                'borrow_date' => '1988-08-12',
                'return_date' => '2013-09-19',
                'late_fees' => 5000.00,
            ],
        ]);
    }
}
