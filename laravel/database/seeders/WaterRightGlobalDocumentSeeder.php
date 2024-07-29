<?php

namespace Database\Seeders;

use App\Models\WaterRightGlobalDocument;
use Illuminate\Database\Seeder;

class WaterRightGlobalDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterRightGlobalDocument::factory()->count(9)->create();
    }
}
