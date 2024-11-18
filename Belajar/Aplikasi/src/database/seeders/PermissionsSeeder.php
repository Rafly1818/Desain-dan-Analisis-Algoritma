<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Create permission for staff
        $staffPermissions = [
            'books',
            'view_any_books',
            'create_books',
            'update_books',
            'delete_books',
            'delete_any_books',
            'borrowings',
            'view_any_borrowings',
            'create_borrowings',
            'update_borrowings',
            'delete_borrowings',
            'delete_any_borrowings',
            'visitors',
            'view_any_visitors',
            'create_visitors',
            'update_visitors',
            'delete_visitors',
            'delete_any_visitors',
        ];
    }
}
