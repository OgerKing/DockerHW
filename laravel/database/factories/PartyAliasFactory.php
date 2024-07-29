<?php

namespace Database\Factories;

use App\Models\ContactEmail;
use App\Models\ContactTelephone;
use App\Models\PartyAlias;
use App\Models\PartyAliasType;
use App\Models\PartyStatus;
use App\Models\PartyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyAliasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartyAlias::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'contact_email_id' => ContactEmail::factory(),
            'contact_telephone_id' => ContactTelephone::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'entity_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'party_alias_type_id' => PartyAliasType::factory(),
            'party_id' => $this->faker->randomDigitNot(2),
            'party_status_id' => PartyStatus::factory(),
            'party_type_id' => PartyType::factory(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
