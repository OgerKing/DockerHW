<?php

namespace Database\Seeders;

use App\Models\AdjudicationXyDatum;
use Illuminate\Database\Seeder;

class AdjudicationXyDatumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationXyDatum::factory()->count(9)->create();
    }
}
