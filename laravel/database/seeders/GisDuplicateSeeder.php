<?php

namespace Database\Seeders;

use App\Models\GisDuplicate;
use Illuminate\Database\Seeder;

class GisDuplicateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GisDuplicate::factory()->count(9)->create();
    }
}
