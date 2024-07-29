<?php

namespace Database\Factories;

use App\Models\abstractingDocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class abstractingDocumentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = abstractingDocumentType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'abstracting_document_type_code' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'abstracting_document_type_description' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'abstracting_document_type_hierarchy' => $this->faker->randomNumber(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
