<?php

namespace Database\Seeders;

use App\Models\HydrographicDocumentType;
use Illuminate\Database\Seeder;

class HydrographicDocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HydrographicDocumentType::factory()->count(9)->create();
    }
}
