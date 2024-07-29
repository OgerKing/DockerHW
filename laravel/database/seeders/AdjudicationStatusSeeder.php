<?php

namespace Database\Seeders;

use App\Models\AdjudicationStatus;
use Illuminate\Database\Seeder;

class AdjudicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 
    public function run(): void
    {
        $statusTypes = ['Adjudication', 'Archived', 'Final Decree', 'Hydrographic Survey', 'Inter Se', 'Judicial', 'Post Final Decree', 'Settlement'];
        foreach($statusTypes as $description){
            AdjudicationStatus::factory()->create(['adjudication_status_description' => $description]);
        }
    }
}
