<?php

namespace Database\Factories;

use App\Models\WaterSource;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaterSourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaterSource::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'water_source_description' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'water_source_sort' => $this->faker->randomNumber(),
            'water_source_type' => $this->faker->randomLetter(),
        ];
    }
}
