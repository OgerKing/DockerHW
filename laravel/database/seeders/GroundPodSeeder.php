<?php

namespace Database\Seeders;

use App\Models\GroundPod;
use Illuminate\Database\Seeder;

class GroundPodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroundPod::factory()->count(9)->create();
    }
}
