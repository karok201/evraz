<?php

namespace App\Repositories;

use App\Models\OperationType;
use Illuminate\Database\Eloquent\Collection;

class OperationTypeRepository
{
    /**
     * @return OperationType[]|Collection
     */
    public function getAll(): Collection
    {
        return OperationType::query()->get();
    }
}
