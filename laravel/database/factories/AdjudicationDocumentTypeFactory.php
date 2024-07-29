<?php

namespace Database\Factories;

use App\Models\AdjudicationDocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationDocumentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationDocumentType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'defendant_document_type_description' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
