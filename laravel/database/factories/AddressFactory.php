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
use App\Models\Court;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'addr1' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'addr_invalid' => $this->faker->numberBetween(-8, 8),
            'addr_update' => $this->faker->dateTime(),
            'adjudication_courts_id' => AdjudicationCourt::factory(),
            'adjudication_document_id' => AdjudicationDocument::factory(),
            'adjudication_document_type_id' => AdjudicationDocumentType::factory(),
            'adjudication_hydro_boundary_type_id' => AdjudicationHydroBoundaryType::factory(),
            'adjudication_id' => Adjudication::factory(),
            'adjudication_section_status_id' => AdjudicationSectionStatus::factory(),
            'adjudication_section_type_id' => AdjudicationSectionType::factory(),
            'adjudication_sections_id' => AdjudicationSection::factory(),
            'adjudication_status_id' => AdjudicationStatus::factory(),
            'bureau_id' => Bureau::factory(),
            'care_of' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'cell_phn_hl' => $this->faker->regexify('[A-Za-z0-9]{14}'),
            'city_hl' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'court_id' => Court::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'e_mail_hl' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'home_phn_hl' => $this->faker->regexify('[A-Za-z0-9]{14}'),
            'label_id' => $this->faker->randomNumber(),
            'label_id_access' => $this->faker->randomNumber(),
            'p_addr_1' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'p_city_hl' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'p_state' => $this->faker->randomLetter(),
            'p_zip' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'phys_addr_invalid' => $this->faker->numberBetween(-8, 8),
            'program_id' => Program::factory(),
            'state' => $this->faker->randomLetter(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'work_phn_hl' => $this->faker->regexify('[A-Za-z0-9]{14}'),
            'zip' => $this->faker->postcode(),
        ];
    }
}
