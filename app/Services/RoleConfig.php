<?php
declare(strict_types=1);

namespace App\Services;

class RoleConfig
{
    /**
     * Get Permissions by Roles from Config
     *
     * @return array
     */
    public static function getPermissionsByRoles(): array
    {
        return (array) config('permission.permissions_by_roles');
    }
}
