<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WaterRightUs;

class WaterRightUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'water_right_use_code' => $this->faker->word(),
            'water_right_use_description' => $this->faker->word(),
            'domestic' => $this->faker->randomNumber(),
            'acres' => $this->faker->randomNumber(),
            'use_type_nbr' => $this->faker->randomNumber(),
            'created_by' => $this->faker->word(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
