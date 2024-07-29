<?php

namespace Database\Seeders;

use App\Models\NoUse;
use Illuminate\Database\Seeder;

class NoUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NoUse::factory()->count(9)->create();
    }
}
