<?php

namespace Database\Seeders;

use App\Models\AdjudicationHydroBoundaryType;
use Illuminate\Database\Seeder;

class AdjudicationHydroBoundaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationHydroBoundaryType::factory()->count(9)->create();
    }
}
