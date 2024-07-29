<?php

namespace Database\Factories;

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
use App\Models\Pod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pod::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
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
            'county_id' => $this->faker->randomDigitNot(2),
            'court_id' => $this->faker->randomDigitNot(2),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'crew_nbr' => $this->faker->numberBetween(-1000, 1000),
            'f_photo_nbr' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'grant_id' => $this->faker->randomDigitNot(2),
            'lat_deg' => $this->faker->randomFloat(4, 0, 9999.9999),
            'lat_min' => $this->faker->randomFloat(4, 0, 9999.9999),
            'lat_sec' => $this->faker->randomFloat(4, 0, 9999.9999),
            'location_data_source' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'lon_deg' => $this->faker->randomFloat(4, 0, 9999.9999),
            'lon_min' => $this->faker->randomFloat(4, 0, 9999.9999),
            'lon_sec' => $this->faker->randomFloat(4, 0, 9999.9999),
            'lot' => $this->faker->regexify('[A-Za-z0-9]{24}'),
            'map_id_desc' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'map_qtr' => $this->faker->randomLetter(),
            'ose_file' => $this->faker->regexify('[A-Za-z0-9]{75}'),
            'plss_description' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'pod_basin' => $this->faker->regexify('[A-Za-z0-9]{3}'),
            'pod_comments_id' => $this->faker->randomDigitNot(2),
            'pod_field_no' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'pod_global_documents_id' => $this->faker->randomDigitNot(2),
            'pod_hl_txt' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'pod_loc_date' => $this->faker->dateTime(),
            'pod_loc_time' => $this->faker->dateTime(),
            'pod_location_description' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'pod_map_txt' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'pod_name' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'pod_nbr' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'pod_subfile' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'pod_suffix' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'pod_tract_txt' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'pod_type_id' => $this->faker->randomDigitNot(2),
            'point_qual' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'program_id' => $this->faker->randomDigitNot(2),
            'qtr_16th' => $this->faker->randomLetter(),
            'qtr_4th' => $this->faker->randomLetter(),
            'qtr_64th' => $this->faker->randomLetter(),
            'rng' => $this->faker->randomLetter(),
            's_id_access' => $this->faker->randomNumber(),
            's_type_cat' => $this->faker->randomLetter(),
            'sec' => $this->faker->randomLetter(),
            'selected' => $this->faker->numberBetween(-8, 8),
            'std_dev' => $this->faker->randomFloat(0, 0, 9999999999.),
            'sub_sec_txt' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'tws' => $this->faker->randomLetter(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'waters_pod_id' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'well_define' => $this->faker->numberBetween(-1000, 1000),
            'x' => $this->faker->randomFloat(0, 0, 9999999999.),
            'xy_datum' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'y' => $this->faker->randomFloat(0, 0, 9999999999.),
            'zone' => $this->faker->randomLetter(),
        ];
    }
}
