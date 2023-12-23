<?php

namespace Database\Seeders;

use App\Models\Way;
use Illuminate\Database\Seeder;

class WaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Way::factory(10)->create();
    }
}
