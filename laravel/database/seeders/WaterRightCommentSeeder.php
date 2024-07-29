<?php

namespace Database\Seeders;

use App\Models\WaterRightComment;
use Illuminate\Database\Seeder;

class WaterRightCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WaterRightComment::factory()->count(9)->create();
    }
}
