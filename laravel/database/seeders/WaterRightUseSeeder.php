<?php

namespace Database\Seeders;

use App\Models\WaterRightUse;
use Illuminate\Database\Seeder;

class WaterRightUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterRightUse::factory()->count(9)->create();
    }
}
