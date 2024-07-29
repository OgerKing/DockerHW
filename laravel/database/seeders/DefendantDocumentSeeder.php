<?php

namespace Database\Seeders;

use App\Models\DefendantDocument;
use Illuminate\Database\Seeder;

class DefendantDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DefendantDocument::factory()->count(9)->create();
    }
}
