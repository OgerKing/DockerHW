<?php

namespace Database\Factories;

use App\Models\AdjudicationCourt;
use App\Models\AdjudicationDocument;
use App\Models\AdjudicationXyDatum;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationXyDatumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationXyDatum::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_courts_id' => AdjudicationCourt::factory(),
            'adjudication_document_id' => AdjudicationDocument::factory(),
            'adjudication_document_type_id' => $this->faker->randomDigitNot(2),
            'adjudication_hydro_boundary_type_id' => $this->faker->randomDigitNot(2),
            'adjudication_id' => $this->faker->randomDigitNot(2),
            'adjudication_section_status_id' => $this->faker->randomDigitNot(2),
            'adjudication_section_type_id' => $this->faker->randomDigitNot(2),
            'adjudication_sections_id' => $this->faker->randomDigitNot(2),
            'adjudication_status_id' => $this->faker->randomDigitNot(2),
            'bureau_id' => $this->faker->randomDigitNot(2),
            'court_id' => $this->faker->randomDigitNot(2),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'program_id' => $this->faker->randomDigitNot(2),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'xy_datum' => $this->faker->randomLetter(),
            'zone' => $this->faker->randomLetter(),
        ];
    }
}
