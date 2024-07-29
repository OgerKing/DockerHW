<?php

namespace Database\Factories;

use App\Models\PartyAliasType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyAliasTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartyAliasType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'party_alias_type_name' => $this->faker->regexify('[A-Za-z0-9]{36}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
