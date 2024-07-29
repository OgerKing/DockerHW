<?php

namespace Database\Seeders;

use App\Models\WaterSource;
use Illuminate\Database\Seeder;

class WaterSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterSource::factory()->count(9)->create();
    }
}
