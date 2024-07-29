<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Action::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'action_code' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'action_description' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'created_at' => $this->faker->dateTime(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_at' => $this->faker->dateTime(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
