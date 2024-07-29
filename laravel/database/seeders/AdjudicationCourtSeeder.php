<?php

namespace Database\Seeders;

use App\Models\AdjudicationCourt;
use Illuminate\Database\Seeder;

class AdjudicationCourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationCourt::factory()->count(10)->create();
    }
}
