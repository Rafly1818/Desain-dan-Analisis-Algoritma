<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();

        // Additional seeders
        $this->call([BooksSeeder::class]);
        $this->call([VisitorsSeeder::class]);
        $this->call([BorrowingsSeeder::class]);
        $this->call([PermissionsSeeder::class]);
    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create Staff user if not exists
        $staffEmail = 'staff@admin.com';
        if (! User::where('email', $staffEmail)->exists()) {
            $staff = User::create([
                'name' => 'Staff',
                'email' => $staffEmail,
                'password' => bcrypt('password'),
            ]);
            $staff->assignRole('Staff');
        }
    }
}
