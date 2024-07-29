<?php

namespace Database\Seeders;

use App\Models\abstractingDocumentType;
use Illuminate\Database\Seeder;

class abstractingDocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstractingDocumentType::factory()->count(9)->create();
    }
}
