<?php

namespace Database\Seeders;

use App\Models\SurfaceZone;
use Illuminate\Database\Seeder;

class SurfaceZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SurfaceZone::factory()->count(9)->create();
    }
}
