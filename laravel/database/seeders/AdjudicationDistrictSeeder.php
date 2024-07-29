<?php

namespace Database\Seeders;

use App\Models\AdjudicationDistrict;
use Illuminate\Database\Seeder;

class AdjudicationDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationDistrict::factory()->count(50)->create();
    }
}
