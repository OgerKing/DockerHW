<?php

namespace Database\Factories;

use App\Models\GlobalDocument;
use App\Models\GlobalDocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class GlobalDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GlobalDocument::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'doc_date' => $this->faker->dateTime(),
            'docket_id' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'global_desc' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'global_document_type_id' => GlobalDocumentType::factory(),
            'global_id' => $this->faker->randomNumber(),
            'global_id_access' => $this->faker->randomNumber(),
            'global_title' => $this->faker->regexify('[A-Za-z0-9]{300}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
