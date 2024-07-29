<?php

namespace Database\Seeders;

use App\Models\ClaimResolution;
use Illuminate\Database\Seeder;

class ClaimResolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClaimResolution::factory()->count(9)->create();
    }
}
