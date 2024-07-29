<?php

namespace Database\Factories;

use App\Models\WaterRightGlobalDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaterRightGlobalDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaterRightGlobalDocument::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'doc_date' => $this->faker->dateTime(),
            'docket_id' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'water_right_global_desc' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'water_right_global_id' => $this->faker->randomNumber(),
            'water_right_global_id_access' => $this->faker->randomNumber(),
            'water_right_global_title' => $this->faker->regexify('[A-Za-z0-9]{300}'),
        ];
    }
}
