<?php

namespace Database\Seeders;

use App\Models\PouWaterRight;
use Illuminate\Database\Seeder;

class PouWaterRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PouWaterRight::factory()->count(9)->create();
    }
}
