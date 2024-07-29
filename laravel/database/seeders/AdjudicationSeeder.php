<?php

namespace Database\Seeders;

use App\Models\Adjudication;
use Illuminate\Database\Seeder;

class AdjudicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adjudication::factory()->count(50)->create();
    }
}
