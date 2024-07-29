<?php

namespace Database\Seeders;

use App\Models\WaterBasin;
use Illuminate\Database\Seeder;

class WaterBasinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterBasin::factory()->count(9)->create();
    }
}
