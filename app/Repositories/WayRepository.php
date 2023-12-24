<?php

namespace App\Repositories;

use App\Models\Way;
use Illuminate\Database\Eloquent\Collection;

class WayRepository
{
    public function getAll(): Collection
    {
        return Way::query()->get();
    }
}
