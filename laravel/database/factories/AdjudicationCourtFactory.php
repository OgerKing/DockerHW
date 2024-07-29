<?php

namespace Database\Factories;

use App\Models\AdjudicationCourt;
use App\Models\Court;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationCourtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationCourt::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'case_number' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'court_docket_link' => $this->faker->regexify('[A-Za-z0-9]{120}'),
            'court_id' => Court::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'docket_number' => '307-SM9703175-A',
            'judge_name' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'judge_signature_image_file_name' => $this->faker->word(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
