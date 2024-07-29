<?php

namespace Database\Seeders;

use App\Models\ClaimStatus;
use Illuminate\Database\Seeder;

class ClaimStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClaimStatus::factory()->count(9)->create();
    }
}
