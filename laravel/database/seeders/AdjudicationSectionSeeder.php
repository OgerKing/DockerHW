<?php

namespace Database\Seeders;

use App\Models\AdjudicationSection;
use Illuminate\Database\Seeder;

class AdjudicationSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationSection::factory()->count(5)->create();
    }
}
