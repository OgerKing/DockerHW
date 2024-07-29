<?php

namespace Database\Seeders;

use App\Models\ClaimType;
use Illuminate\Database\Seeder;

class ClaimTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClaimType::factory()->count(9)->create();
    }
}
