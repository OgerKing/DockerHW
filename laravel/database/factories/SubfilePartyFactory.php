<?php

namespace Database\Factories;

use App\Models\AdjudicationDocument;
use App\Models\AdjudicationDocumentType;
use App\Models\AdjudicationHydroBoundaryType;
use App\Models\AdjudicationSection;
use App\Models\AdjudicationSectionStatus;
use App\Models\AdjudicationSectionType;
use App\Models\ContactEmail;
use App\Models\ContactTelephone;
use App\Models\Court;
use App\Models\DefendantType;
use App\Models\FileLocation;
use App\Models\GlobalDocument;
use App\Models\GlobalDocumentType;
use App\Models\HydrographicDocument;
use App\Models\HydrographicDocumentType;
use App\Models\Party;
use App\Models\PartyInterestType;
use App\Models\PartyStatus;
use App\Models\PartyType;
use App\Models\SubfileParty;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubfilePartyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubfileParty::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_document_id' => AdjudicationDocument::factory(),
            'adjudication_document_type_id' => AdjudicationDocumentType::factory(),
            'adjudication_hydro_boundary_type_id' => AdjudicationHydroBoundaryType::factory(),
            'adjudication_section_status_id' => AdjudicationSectionStatus::factory(),
            'adjudication_section_type_id' => AdjudicationSectionType::factory(),
            'adjudication_sections_id' => AdjudicationSection::factory(),
            'case_close_date' => $this->faker->dateTime(),
            'case_number' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'case_open_date' => $this->faker->dateTime(),
            'category' => $this->faker->randomLetter(),
            'cert_mail' => $this->faker->randomNumber(),
            'cid_no' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'contact_email_id' => ContactEmail::factory(),
            'contact_telephone_id' => ContactTelephone::factory(),
            'court_id' => Court::factory(),
            'court_number' => $this->faker->randomNumber(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'defendant_type_id' => DefendantType::factory(),
            'file_location_id' => FileLocation::factory(),
            'global_document_id' => GlobalDocument::factory(),
            'global_document_type_id' => GlobalDocumentType::factory(),
            'hydrographic_document_type_id' => HydrographicDocumentType::factory(),
            'hydrographic_documents_id' => HydrographicDocument::factory(),
            'is_case_number_invalid' => $this->faker->numberBetween(-8, 8),
            'mailing_address_id' => $this->faker->randomNumber(),
            'owner_set' => $this->faker->regexify('[A-Za-z0-9]{25}'),
            'party_id' => Party::factory(),
            'party_interest_type_id' => PartyInterestType::factory(),
            'party_status_id' => PartyStatus::factory(),
            'party_type_id' => PartyType::factory(),
            'sub_id' => $this->faker->randomNumber(),
            'subfile_adjudication_status_id' => $this->faker->randomNumber(),
            'subfile_case_status_id' => $this->faker->randomNumber(),
            'subfile_id' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
