<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubfilePerson;

class SubfilePersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subfile_id' => \App\Models\Subfile::factory(),
            'case_number' => $this->faker->word(),
            'category' => $this->faker->randomLetter(),
            'cert_mail' => $this->faker->randomNumber(),
            'cid_no' => $this->faker->word(),
            'contact_email_id' => \App\Models\ContactEmail::factory(),
            'court_id' => $this->faker->randomDigitNotNull(),
            'contact_telephone_id' => \App\Models\ContactTelephone::factory(),
            'created_by' => $this->faker->word(),
            'court_number' => $this->faker->randomNumber(),
            'defendant_type_id' => $this->faker->randomDigitNotNull(),
            'mailing_address_id' => $this->faker->randomDigitNotNull(),
            'owner_set' => $this->faker->word(),
            'person_interest_type_id' => \App\Models\PersonInterestType::factory(),
            'person_legal_interest_type_id' => \App\Models\PersonLegalInterestType::factory(),
            'person_status_id' => \App\Models\PersonStatus::factory(),
            'person_type_id' => \App\Models\PersonType::factory(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
