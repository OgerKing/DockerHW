<?php

namespace Database\Seeders;

use App\Models\PouGlobalDocument;
use Illuminate\Database\Seeder;

class PouGlobalDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PouGlobalDocument::factory()->count(9)->create();
    }
}
