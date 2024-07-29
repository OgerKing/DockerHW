<?php

namespace Database\Seeders;

use App\Models\PouNonIrrigation;
use Illuminate\Database\Seeder;

class PouNonIrrigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PouNonIrrigation::factory()->count(9)->create();
    }
}
