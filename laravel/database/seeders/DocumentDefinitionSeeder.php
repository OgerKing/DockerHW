<?php

namespace Database\Seeders;

use App\Models\DocumentDefinition;
use Illuminate\Database\Seeder;

class DocumentDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentDefinition::factory()->count(9)->create();
    }
}
