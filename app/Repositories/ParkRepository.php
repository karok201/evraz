<?php

namespace App\Repositories;

use App\Models\Park;

class ParkRepository
{
    public function getAll()
    {
        return Park::query()->get();
    }
}
