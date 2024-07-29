<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'city_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'state_id' => $this->faker->regexify('[A-Za-z0-9]{2}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
