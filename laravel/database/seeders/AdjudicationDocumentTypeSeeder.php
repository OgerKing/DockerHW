<?php

namespace Database\Seeders;

use App\Models\AdjudicationDocumentType;
use Illuminate\Database\Seeder;

class AdjudicationDocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationDocumentType::factory()->count(9)->create();
    }
}
