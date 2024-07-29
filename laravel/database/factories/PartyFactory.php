<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Adjudication;
use App\Models\AdjudicationCourt;
use App\Models\AdjudicationDocument;
use App\Models\AdjudicationDocumentType;
use App\Models\AdjudicationHydroBoundaryType;
use App\Models\AdjudicationSection;
use App\Models\AdjudicationSectionStatus;
use App\Models\AdjudicationSectionType;
use App\Models\AdjudicationStatus;
use App\Models\Bureau;
use App\Models\ContactEmail;
use App\Models\ContactTelephone;
use App\Models\Court;
use App\Models\Party;
use App\Models\PartyStatus;
use App\Models\PartyType;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Party::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'address_id' => Address::factory(),
            'adjudication_courts_id' => AdjudicationCourt::factory(),
            'adjudication_document_id' => AdjudicationDocument::factory(),
            'adjudication_document_type_id' => AdjudicationDocumentType::factory(),
            'adjudication_hydro_boundary_type_id' => AdjudicationHydroBoundaryType::factory(),
            'adjudication_id' => Adjudication::factory(),
            'adjudication_section_status_id' => AdjudicationSectionStatus::factory(),
            'adjudication_section_type_id' => AdjudicationSectionType::factory(),
            'adjudication_sections_id' => AdjudicationSection::factory(),
            'adjudication_status_id' => AdjudicationStatus::factory(),
            'assoc' => $this->faker->numberBetween(-8, 8),
            'atty_id' => $this->faker->randomNumber(),
            'authorized_agent' => $this->faker->numberBetween(-8, 8),
            'bureau_id' => Bureau::factory(),
            'caretaker' => $this->faker->numberBetween(-8, 8),
            'contact_email_id' => ContactEmail::factory(),
            'contact_telephone_id' => ContactTelephone::factory(),
            'court_id' => Court::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'department' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'division' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'entity_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'first_name' => $this->faker->firstName(),
            'former' => $this->faker->numberBetween(-8, 8),
            'gov' => $this->faker->numberBetween(-1000, 1000),
            'individual' => $this->faker->numberBetween(-8, 8),
            'is_deceased' => $this->faker->numberBetween(-8, 8),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'p_idaccess' => $this->faker->randomNumber(),
            'p_sort' => $this->faker->randomNumber(),
            'party_alias_id' => $this->faker->randomDigitNot(2),
            'party_end_date' => $this->faker->dateTime(),
            'party_entity' => $this->faker->numberBetween(-1000, 1000),
            'party_start_date' => $this->faker->dateTime(),
            'party_status_id' => PartyStatus::factory(),
            'party_type_id' => PartyType::factory(),
            'program_id' => Program::factory(),
            'sovereign' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'special_handling_instructions' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'suffix' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'verified' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
