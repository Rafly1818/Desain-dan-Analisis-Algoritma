<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Define permissions
        $staffPermissions = [
            'view tasks',
            'edit tasks',
            'delete tasks'
        ];

        // Ensure roles exist
        $staffRole = Role::firstOrCreate(['name' => 'Staff', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

        // Assign roles to specific users based on email
        $staffUser = User::where('email', 'staff@admin.com')->first();
        $adminUser = User::where('email', 'admin@example.com')->first();

        if ($staffUser) {
            $staffUser->assignRole($staffRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }

        // Create permissions if they don't exist
        foreach ($staffPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to the 'staff' role
        $staffRole->syncPermissions($staffPermissions);
    }
}
