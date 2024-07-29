<?php

namespace Database\Seeders;

use App\Models\SurfacePod;
use Illuminate\Database\Seeder;

class SurfacePodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SurfacePod::factory()->count(9)->create();
    }
}
