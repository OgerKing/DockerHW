<?php

namespace Database\Seeders;

use App\Models\PodGlobalDocument;
use Illuminate\Database\Seeder;

class PodGlobalDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodGlobalDocument::factory()->count(9)->create();
    }
}
