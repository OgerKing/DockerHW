<?php

namespace Database\Seeders;

use App\Models\HsRecommendation;
use Illuminate\Database\Seeder;

class HsRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HsRecommendation::factory()->count(9)->create();
    }
}
