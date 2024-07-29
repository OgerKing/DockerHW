<?php

namespace Database\Seeders;

use App\Models\DefendantDocumentsType;
use Illuminate\Database\Seeder;

class DefendantDocumentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DefendantDocumentsType::factory()->count(9)->create();
    }
}
