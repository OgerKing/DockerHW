<?php

namespace Database\Seeders;

use App\Models\abstractingDocumentPou;
use Illuminate\Database\Seeder;

class abstractingDocumentPouSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstractingDocumentPou::factory()->count(9)->create();
    }
}
