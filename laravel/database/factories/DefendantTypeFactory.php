<?php

namespace Database\Factories;

use App\Models\DefendantType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DefendantTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DefendantType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'defendant_type_description' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
