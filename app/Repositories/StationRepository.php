<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Station;
use Illuminate\Support\Collection;

class StationRepository
{
    public function getByRoles(Collection $roles): Station
    {
        return Station::query()
            ->whereIn(Station::FIELD_ROLE, $roles)
            ->first();
    }

    public function getById(int $stationId)
    {
        return Station::query()
            ->where(Station::FIELD_ID, $stationId)
            ->first();
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Station::query()->get();
    }
}
