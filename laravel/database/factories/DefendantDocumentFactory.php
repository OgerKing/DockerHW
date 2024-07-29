<?php

namespace Database\Factories;

use App\Models\ContactEmail;
use App\Models\ContactTelephone;
use App\Models\DefendantDocument;
use App\Models\Party;
use App\Models\PartyStatus;
use App\Models\PartyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DefendantDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DefendantDocument::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'contact_email_id' => ContactEmail::factory(),
            'contact_telephone_id' => ContactTelephone::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'defendant' => $this->faker->numberBetween(-8, 8),
            'defendant_document_type_id' => $this->faker->randomNumber(),
            'defendant_documents_date' => $this->faker->dateTime(),
            'defendant_documents_desc' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'docket_id' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'o_id' => $this->faker->randomNumber(),
            'party_id' => Party::factory(),
            'party_status_id' => PartyStatus::factory(),
            'party_type_id' => PartyType::factory(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
