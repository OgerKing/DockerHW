<?php

namespace Database\Factories;

use App\Models\AdjudicationSectionStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationSectionStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationSectionStatus::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_section_status_description' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
