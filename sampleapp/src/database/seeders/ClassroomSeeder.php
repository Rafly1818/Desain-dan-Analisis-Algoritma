<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'CR 401',
            'CR 402',
            'CR 403',
            'CR 404',
            'CR 405',
            'CR 406',
            'CR 407',
            'CR 408',
            'CR 409',
            'CR 410'
        ];
        
        foreach ($data as $dataclass) {
            Classroom::firstOrCreate([
                'name' => $dataclass
            ]);

        }
    }
}