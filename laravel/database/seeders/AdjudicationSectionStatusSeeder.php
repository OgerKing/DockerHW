<?php

namespace Database\Seeders;

use App\Models\AdjudicationSectionStatus;
use Illuminate\Database\Seeder;

class AdjudicationSectionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationSectionStatus::factory()->count(9)->create();
    }
}
