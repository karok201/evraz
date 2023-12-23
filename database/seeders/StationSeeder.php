<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Services\RoleService;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    public function run(): void
    {
        Station::query()->insert([
            [
                Station::FIELD_NAME => 'Новокузнецк-Северный',
                Station::FIELD_ROLE => RoleService::ROLE_NOVOKUZNECK_OPERATOR,
                Station::FIELD_MAX_CARRIAGES_COUNT => random_int(1, 100),
            ],
            [
                Station::FIELD_NAME => 'Томусинская',
                Station::FIELD_ROLE => RoleService::ROLE_TOMUSINSKAYA_OPERATOR,
                Station::FIELD_MAX_CARRIAGES_COUNT => random_int(1, 100),
            ],
            [
                Station::FIELD_NAME => 'Курегеш',
                Station::FIELD_ROLE => RoleService::ROLE_KUREGESH_OPERATOR,
                Station::FIELD_MAX_CARRIAGES_COUNT => random_int(1, 100)
            ]
        ]);
    }
}
