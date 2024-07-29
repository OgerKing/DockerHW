<?php

namespace Database\Seeders;

use App\Models\Irrigation;
use Illuminate\Database\Seeder;

class IrrigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Irrigation::factory()->count(9)->create();
    }
}
