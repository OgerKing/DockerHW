<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubfileAdjudicationStatus;

class SubfileAdjudicationStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subfile_adjudication_status_code' => $this->faker->randomLetter(),
            'subfile_adjudication_status_description' => $this->faker->word(),
            'sort' => $this->faker->randomNumber(),
            'created_by' => $this->faker->word(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
