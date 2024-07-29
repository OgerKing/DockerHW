<?php

namespace Database\Seeders;

use App\Models\FlatRater;
use Illuminate\Database\Seeder;

class FlatRaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FlatRater::factory()->count(9)->create();
    }
}
