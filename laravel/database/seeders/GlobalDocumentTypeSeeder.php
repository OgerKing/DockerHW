<?php

namespace Database\Seeders;

use App\Models\GlobalDocumentType;
use Illuminate\Database\Seeder;

class GlobalDocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GlobalDocumentType::factory()->count(9)->create();
    }
}
