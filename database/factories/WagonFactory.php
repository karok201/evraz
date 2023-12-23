<?php

namespace Database\Factories;

use App\Models\Owner;
use App\Models\Wagon;
use App\Models\WagonType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wagon>
 */
class WagonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wagonTypes = WagonType::all();
        $owners = Owner::all();

        return [
            Wagon::FIELD_TYPE_ID => $wagonTypes->random()->id,
            Wagon::FIELD_IS_SICK => random_int(1, 10) > 8,
            Wagon::FIELD_OWNER_ID => $owners->random()->id,
            Wagon::FIELD_IS_WITH_HATCH => random_int(1, 10) > 8,
            Wagon::FIELD_LOAD_CAPACITY => $this->faker->randomFloat(2, 0, 100),
            Wagon::FIELD_DAYS_TO_REPAIR => random_int(2, 15),
            Wagon::FIELD_KILOMETERS_LEFT => random_int(500, 100000),
            Wagon::FIELD_IS_DIRTY => random_int(1, 10) > 8
        ];
    }
}
