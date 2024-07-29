<?php

namespace Database\Seeders;

use App\Models\WatersStatus;
use Illuminate\Database\Seeder;

class WatersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WatersStatus::factory()->count(9)->create();
    }
}
