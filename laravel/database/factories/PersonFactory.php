<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_id' => \App\Models\Address::factory(),
            'attorney_id' => \App\Models\Attorney::factory(),
            'bureau_id' => \App\Models\Bureau::factory(),
            'contact_email_id' => \App\Models\ContactEmail::factory(),
            'contact_telephone_id' => \App\Models\ContactTelephone::factory(),
            'court_id' => \App\Models\Court::factory(),
            'department' => $this->faker->word(),
            'division' => $this->faker->word(),
            'entity_name' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'gov' => $this->faker->randomNumber(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->word(),
            'p_idaccess' => $this->faker->randomNumber(),
            'p_sort' => $this->faker->randomNumber(),
            'person_alias_id' => \App\Models\PersonAlias::factory(),
            'person_entity' => $this->faker->randomNumber(),
            'person_status_id' => \App\Models\PersonStatus::factory(),
            'person_type_id' => \App\Models\PersonType::factory(),
            'sovereign' => $this->faker->word(),
            'special_handling_instructions' => $this->faker->word(),
            'suffix' => $this->faker->suffix(),
            'created_by' => $this->faker->word(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
