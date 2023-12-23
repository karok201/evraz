<?php

namespace Database\Seeders;

use App\Services\RoleConfig;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $permissionsByRoles = RoleConfig::getPermissionsByRoles();

        foreach ($permissionsByRoles as $role => $permissions) {
            Role::query()->firstOrCreate([
                'name' => $role
            ], [
                'guard_name' => 'web'
            ]);
        }
    }
}
