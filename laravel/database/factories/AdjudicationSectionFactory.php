<?php

namespace Database\Factories;

use App\Models\AdjudicationHydroBoundaryType;
use App\Models\AdjudicationSection;
use App\Models\AdjudicationSectionStatus;
use App\Models\AdjudicationSectionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationSectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationSection::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_hydro_boundary_type_id' => AdjudicationHydroBoundaryType::factory(),
            'adjudication_section_name' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'adjudication_section_status_id' => AdjudicationSectionStatus::factory(),
            'adjudication_section_type_id' => AdjudicationSectionType::factory(),
            'boundary_name' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'prefix' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'section_type' => $this->faker->regexify('[A-Za-z0-9]{24}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
