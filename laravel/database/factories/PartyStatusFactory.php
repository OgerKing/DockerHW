<?php

namespace Database\Factories;

use App\Models\PartyStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartyStatus::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'party_status_description' => $this->faker->regexify('[A-Za-z0-9]{24}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
