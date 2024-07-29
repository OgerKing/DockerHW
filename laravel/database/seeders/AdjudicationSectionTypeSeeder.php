<?php

namespace Database\Seeders;

use App\Models\AdjudicationSectionType;
use Illuminate\Database\Seeder;

class AdjudicationSectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationSectionType::factory()->count(5)->create();
    }
}
