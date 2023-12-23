<?php

namespace Database\Seeders;

use App\Models\Locomotive;
use App\Models\LocomotiveToData;
use App\Models\Park;
use App\Models\Station;
use App\Models\StationData;
use App\Models\Wagon;
use App\Models\WagonToData;
use App\Models\Way;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationDataSeeder extends Seeder
{
    public function run(): void
    {
        $directions = [
            LocomotiveToData::DIRECTION_LEFT,
            LocomotiveToData::DIRECTION_RIGHT,
        ];

        $stations = Station::all();

        $parks = Park::factory(3)->create();

        foreach ($stations as $station) {
            foreach ($parks as $park) {
                $ways = Way::factory(random_int(1, 5))->create();
                foreach ($ways as $way) {
                    StationData::query()->create([
                        StationData::FIELD_STATION_ID => $station->id,
                        StationData::FIELD_WAY_ID => $way->id,
                        StationData::FIELD_PARK_ID => $park->id,
                        StationData::FIELD_MAX_CARRIAGES_COUNT => random_int(10, 100)
                    ]);
                }
            }
        }

        $data = StationData::all();

        foreach ($data as $stationData) {
            $wagons = Wagon::factory(random_int(2, 5))->create();
            $locomotives = Locomotive::factory(random_int(1, 3))->create();

            $i = 0;
            foreach ($wagons as $wagon) {
                WagonToData::query()->create([
                    WagonToData::FIELD_DATA_ID => $stationData->id,
                    WagonToData::FIELD_WAGON_ID => $wagon->id,
                    WagonToData::FIELD_IDLE_DAYS_LENGTH => random_int(1, 20),
                    WagonToData::FIELD_STATE => '',
                    WagonToData::FIELD_CARGO => '',
                    WagonToData::FIELD_POSITION => $i++
                ]);
            }

            foreach ($locomotives as $locomotive) {
                LocomotiveToData::query()->create([
                    LocomotiveToData::FIELD_LOCOMOTIVE_ID => $locomotive->id,
                    LocomotiveToData::FIELD_DATA_ID => $stationData->id,
                    LocomotiveToData::FIELD_DIRECTION => $directions[random_int(0, 1)]
                ]);
            }
        }
    }
}
