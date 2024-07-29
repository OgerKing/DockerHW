<?php

namespace Database\Seeders;

use App\Models\WaterRightCommentCategory;
use Illuminate\Database\Seeder;

class WaterRightCommentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterRightCommentCategory::factory()->count(9)->create();
    }
}
