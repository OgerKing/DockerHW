<?php

namespace Database\Seeders;

use App\Models\CourtCaseAdjudicationSection;
use Illuminate\Database\Seeder;

class CourtCaseAdjudicationSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourtCaseAdjudicationSection::factory()->count(5)->create();
    }
}
