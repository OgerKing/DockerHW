<?php

namespace Database\Factories;

use App\Models\AdjudicationDocument;
use App\Models\AdjudicationDocumentType;
use App\Models\AdjudicationHydroBoundaryType;
use App\Models\AdjudicationSection;
use App\Models\AdjudicationSectionStatus;
use App\Models\AdjudicationSectionType;
use App\Models\AmountCategory;
use App\Models\Court;
use App\Models\FileLocation;
use App\Models\GlobalDocument;
use App\Models\GlobalDocumentType;
use App\Models\HsRecommendation;
use App\Models\HydrographicDocument;
use App\Models\HydrographicDocumentType;
use App\Models\WaterRight;
use App\Models\WaterRightGlobalDocument;
use App\Models\WaterRightUse;
use App\Models\WaterSource;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaterRightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaterRight::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'accounting_period_date' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'accounting_period_duration' => $this->faker->randomNumber(),
            'adjudication_document_id' => AdjudicationDocument::factory(),
            'adjudication_document_type_id' => AdjudicationDocumentType::factory(),
            'adjudication_hydro_boundary_type_id' => AdjudicationHydroBoundaryType::factory(),
            'adjudication_section_status_id' => AdjudicationSectionStatus::factory(),
            'adjudication_section_type_id' => AdjudicationSectionType::factory(),
            'adjudication_sections_id' => AdjudicationSection::factory(),
            'amount_category_id' => AmountCategory::factory(),
            'amount_txt' => $this->faker->text(),
            'annual_evaporative_loss' => $this->faker->randomFloat(4, 0, 99999999.9999),
            'cfs' => $this->faker->randomFloat(0, 0, 9999999999.),
            'cid_rt_acr' => $this->faker->randomFloat(0, 0, 9999999999.),
            'comments' => $this->faker->text(),
            'con_water_use' => $this->faker->randomFloat(0, 0, 9999999999.),
            'cond' => $this->faker->randomLetter(),
            'court_id' => Court::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'depth' => $this->faker->randomFloat(0, 0, 9999999999.),
            'detailed_purpose_of_use_id' => $this->faker->randomNumber(),
            'div_rt_hl' => $this->faker->randomFloat(0, 0, 9999999999.),
            'ebid_txt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'file_location_id' => FileLocation::factory(),
            'global_document_id' => GlobalDocument::factory(),
            'global_document_type_id' => GlobalDocumentType::factory(),
            'hs_doc_heading' => $this->faker->randomLetter(),
            'hs_pou_notes' => $this->faker->text(),
            'hs_recommend' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'hs_recommendation_id' => HsRecommendation::factory(),
            'hydrographic_document_type_id' => HydrographicDocumentType::factory(),
            'hydrographic_documents_id' => HydrographicDocument::factory(),
            'map_nbr' => $this->faker->randomNumber(),
            'no_right' => $this->faker->numberBetween(-8, 8),
            'off_nr_acr' => $this->faker->randomFloat(0, 0, 9999999999.),
            'off_rt_acr' => $this->faker->randomFloat(0, 0, 9999999999.),
            'offset_indicator' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'ose_file' => $this->faker->regexify('[A-Za-z0-9]{75}'),
            'other_amount_restrictions' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'purpose_of_use_category_id' => $this->faker->randomNumber(),
            'purpose_txt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'r_id_access' => $this->faker->randomNumber(),
            'rev_hs_acr' => $this->faker->numberBetween(-8, 8),
            'right_description' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'right_status_id' => $this->faker->randomNumber(),
            'rt_fdr' => $this->faker->randomFloat(0, 0, 9999999999.),
            'rt_prim_gw' => $this->faker->randomFloat(0, 0, 9999999999.),
            'specific_purpose_of_use_id' => $this->faker->randomNumber(),
            'subfile_adjudication_status_id' => $this->faker->randomNumber(),
            'subfile_case_status_id' => $this->faker->randomNumber(),
            'subfile_id' => $this->faker->randomNumber(),
            'surf_zone_id' => $this->faker->randomNumber(),
            'surface_area' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tot_rt_acr' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tx_acres' => $this->faker->randomFloat(0, 0, 9999999999.),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'volume' => $this->faker->randomFloat(0, 0, 9999999999.),
            'water_duty' => $this->faker->randomFloat(0, 0, 9999999999.),
            'water_right_global_documents_id' => WaterRightGlobalDocument::factory(),
            'water_right_status_id' => $this->faker->randomNumber(),
            'water_right_use_id' => WaterRightUse::factory(),
            'water_source_id' => WaterSource::factory(),
            'work_notes' => $this->faker->regexify('[A-Za-z0-9]{4000}'),
        ];
    }
}
