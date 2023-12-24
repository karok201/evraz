<?php

namespace Database\Seeders;

use App\Models\Owner;
use Faker\Core\Color;
use Faker\Provider\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var Color $colorFaker */
        $colorFaker = app(Color::class);

        Owner::query()->insert([
            [
                Owner::FIELD_NAME => 'HTC',
                Owner::FIELD_COLOR => '#BCF3FF'
            ],
            [
                Owner::FIELD_NAME => 'GK',
                Owner::FIELD_COLOR => '#C8F4C1'
            ],
            [
                Owner::FIELD_NAME => 'ATL',
                Owner::FIELD_COLOR => '#FFB762'
            ],
            [
                Owner::FIELD_NAME => 'PGK',
                Owner::FIELD_COLOR => '#FFBEFC'
            ],
            [
                Owner::FIELD_NAME => 'MOD',
                Owner::FIELD_COLOR => '#C5AAFF'
            ],
            [
                Owner::FIELD_NAME => 'RJD',
                Owner::FIELD_COLOR => '#ABABAB'
            ],
            [
                Owner::FIELD_NAME => 'NPK',
                Owner::FIELD_COLOR => '#FDF0EF'
            ],
            [
                Owner::FIELD_NAME => 'FGK',
                Owner::FIELD_COLOR => '#FFF3B4'
            ],
            [
                Owner::FIELD_NAME => 'MECH',
                Owner::FIELD_COLOR => '#ACCDFF'
            ],
            [
                Owner::FIELD_NAME => 'AGENT',
                Owner::FIELD_COLOR => ''
            ],
            [
                Owner::FIELD_NAME => 'OTHER',
                Owner::FIELD_COLOR => ''
            ]
        ]);
    }
}
