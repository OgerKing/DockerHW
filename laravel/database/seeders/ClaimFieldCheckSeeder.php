<?php

namespace Database\Seeders;

use App\Models\ClaimFieldCheck;
use Illuminate\Database\Seeder;

class ClaimFieldCheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClaimFieldCheck::factory()->count(9)->create();
    }
}
