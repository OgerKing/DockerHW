<?php

namespace Database\Factories;

use App\Models\HydrographicDocument;
use App\Models\HydrographicDocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class HydrographicDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HydrographicDocument::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'hydrographic_document_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'hydrographic_document_owner' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'hydrographic_document_owner_date' => $this->faker->dateTime(),
            'hydrographic_document_owner_status' => $this->faker->regexify('[A-Za-z0-9]{12}'),
            'hydrographic_document_owner_type' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'hydrographic_document_type_id' => HydrographicDocumentType::factory(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
