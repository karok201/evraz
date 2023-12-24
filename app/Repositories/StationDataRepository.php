<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\StationData;

class StationDataRepository
{
    public function getByStation(int $stationId)
    {
        return StationData::query()
            ->where(StationData::FIELD_STATION_ID, $stationId)
            ->get();
    }
}
