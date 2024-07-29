<?php

namespace Database\Seeders;

use App\Models\PodWaterRight;
use Illuminate\Database\Seeder;

class PodWaterRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodWaterRight::factory()->count(9)->create();
    }
}
