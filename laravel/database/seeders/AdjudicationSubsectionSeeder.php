<?php

namespace Database\Seeders;

use App\Models\AdjudicationSubsection;
use Illuminate\Database\Seeder;

class AdjudicationSubsectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationSubsection::factory()->count(5)->create();
    }
}
