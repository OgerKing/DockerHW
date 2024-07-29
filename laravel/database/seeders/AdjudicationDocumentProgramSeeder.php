<?php

namespace Database\Seeders;

use App\Models\AdjudicationDocumentProgram;
use Illuminate\Database\Seeder;

class AdjudicationDocumentProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdjudicationDocumentProgram::factory()->count(9)->create();
    }
}
