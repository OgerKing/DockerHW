<?php

namespace Database\Factories;

use App\Models\WaterRightUse;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaterRightUseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaterRightUse::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'acres' => $this->faker->randomNumber(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'domestic' => $this->faker->randomNumber(),
            'old_only' => $this->faker->numberBetween(-8, 8),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'use_type_nbr' => $this->faker->randomNumber(),
            'water_right_use_code' => $this->faker->regexify('[A-Za-z0-9]{3}'),
            'water_right_use_description' => $this->faker->regexify('[A-Za-z0-9]{128}'),
        ];
    }
}
