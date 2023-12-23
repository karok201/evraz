<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::query()->insert([
            [Owner::FIELD_NAME => 'HTC'],
            [Owner::FIELD_NAME => 'GK'],
            [Owner::FIELD_NAME => 'ATL'],
            [Owner::FIELD_NAME => 'PGK'],
            [Owner::FIELD_NAME => 'MOD'],
            [Owner::FIELD_NAME => 'RJD'],
            [Owner::FIELD_NAME => 'NPK'],
            [Owner::FIELD_NAME => 'FGK'],
            [Owner::FIELD_NAME => 'MECH'],
            [Owner::FIELD_NAME => 'AGENT'],
            [Owner::FIELD_NAME => 'OTHER']
        ]);
    }
}
