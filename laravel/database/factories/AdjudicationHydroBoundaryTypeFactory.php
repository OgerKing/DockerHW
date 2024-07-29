<?php

namespace Database\Factories;

use App\Models\AdjudicationHydroBoundaryType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationHydroBoundaryTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationHydroBoundaryType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_hydro_boundary_type_description' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
