<?php

namespace Database\Seeders;

use App\Models\ImportError;
use Illuminate\Database\Seeder;

class ImportErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImportError::factory()->count(9)->create();
    }
}
