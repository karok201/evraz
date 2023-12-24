<?php

namespace Database\Seeders;

use App\Models\Park;
use App\Models\StationData;
use App\Models\User;
use App\Models\WagonToStation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            StationSeeder::class,
            WagonTypeSeeder::class,
            OwnerSeeder::class,
            StationDataSeeder::class,
            ReasonSeeder::class,
            OperationTypeSeeder::class
        ]);

        DB::table(User::TABLE_NAME)->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
        ]);
    }
}
