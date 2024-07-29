<?php

namespace Database\Factories;

use App\Models\PartyInterestType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyInterestTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartyInterestType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'party_interest_type' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
