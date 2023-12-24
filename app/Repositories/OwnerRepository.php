<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository
{
    public function get(array $columns = ['*'])
    {
        return Owner::query()->get($columns);
    }
}
