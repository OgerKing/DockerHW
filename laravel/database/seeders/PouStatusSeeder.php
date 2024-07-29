<?php

namespace Database\Seeders;

use App\Models\PouStatus;
use Illuminate\Database\Seeder;

class PouStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PouStatus::factory()->count(9)->create();
    }
}
