<?php

namespace Database\Seeders;

use App\Models\AmountCategory;
use Illuminate\Database\Seeder;

class AmountCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AmountCategory::factory()->count(9)->create();
    }
}
