<?php

namespace Database\Factories;

use App\Models\DefendantDocumentsType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DefendantDocumentsTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DefendantDocumentsType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'defendant_document_type_code' => $this->faker->randomLetter(),
            'defendant_document_type_description' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'offer_exclude' => $this->faker->numberBetween(-8, 8),
            'report' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'sort' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
