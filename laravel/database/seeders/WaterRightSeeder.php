<?php

namespace Database\Seeders;

use App\Models\WaterRight;
use Illuminate\Database\Seeder;

class WaterRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterRight::factory()->count(9)->create();
    }
}
