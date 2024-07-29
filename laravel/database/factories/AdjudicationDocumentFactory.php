<?php

namespace Database\Factories;

use App\Models\AdjudicationDocument;
use App\Models\AdjudicationDocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdjudicationDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationDocument::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'adjudication_document_code' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'adjudication_document_title' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'adjudication_document_type_id' => AdjudicationDocumentType::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'document_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'document_sort' => $this->faker->randomFloat(0, 0, 9999999999.),
            'document_status' => $this->faker->randomFloat(0, 0, 9999999999.),
            'event_code' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'wrats_status_indicator' => $this->faker->regexify('[A-Za-z0-9]{3}'),
        ];
    }
}
