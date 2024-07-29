<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubfileClaim;

class SubfileClaimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subfile_id' => \App\Models\Subfile::factory(),
            'claim_title' => $this->faker->word(),
            'claim_type_id' => \App\Models\ClaimType::factory(),
            'claim_status_id' => \App\Models\ClaimStatus::factory(),
            'claim_person' => $this->faker->randomNumber(),
            'claim_resolution_id' => \App\Models\ClaimResolution::factory(),
            'court_eo' => $this->faker->randomNumber(1),
            'resources_id' => \App\Models\Resource::factory(),
            'attorney_id' => \App\Models\Attorney::factory(),
            'subfile_claim_explanation' => $this->faker->word(),
            'created_by' => $this->faker->word(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
