<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\StationData;
use Illuminate\Support\Collection;

class StationDataService
{
    /**
     * @param StationData[]|Collection $stationData
     *
     * @return array
     */
    public function getWaysByParks(Collection $stationData): array
    {
        $result = [];

        foreach ($stationData as $datum) {
            $result[$datum->park_id][$datum->way_id] = $datum->wagonsToData;
        }

        return $result;
    }

    /**
     * @param StationData[]|Collection $stationData
     *
     * @return int
     */
    public function getStationWagonCount(Collection $stationData): int
    {
        $wagons = [];
        foreach ($stationData as $datum) {
            foreach ($datum->wagonsToData as $wagonToData) {
                $wagons[$wagonToData->wagon_id] = $wagonToData->wagon_id;
            }
        }

        return count($wagons);
    }
}
