<?php

namespace App\Repositories;

use App\Models\Reason;
use Illuminate\Database\Eloquent\Collection;

class ReasonRepository
{
    /**
     * @return Reason[]|Collection
     */
    public function getAll(): Collection
    {
        return Reason::query()->get();
    }
}
