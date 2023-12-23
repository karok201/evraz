<?php

namespace Database\Seeders;

use App\Models\WagonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WagonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WagonType::query()->insert([
            [WagonType::FIELD_NAME => 'HalfCarriage'],
            [WagonType::FIELD_NAME => 'Platform'],
            [WagonType::FIELD_NAME => 'RollPlatform'],
            [WagonType::FIELD_NAME => 'UsoPlatform'],
            [WagonType::FIELD_NAME => 'Hopper'],
            [WagonType::FIELD_NAME => 'Tank'],
            [WagonType::FIELD_NAME => 'CoveredCarriage'],
            [WagonType::FIELD_NAME => 'Sdpm'],
            [WagonType::FIELD_NAME => 'Sm2'],
            [WagonType::FIELD_NAME => 'Ppsm2'],
            [WagonType::FIELD_NAME => 'Pksm2'],
            [WagonType::FIELD_NAME => 'DgkMpt'],
            [WagonType::FIELD_NAME => 'Vprs'],
            [WagonType::FIELD_NAME => 'Uk'],
            [WagonType::FIELD_NAME => 'KranKj'],
            [WagonType::FIELD_NAME => 'GuideCarriage'],
        ]);
    }
}
