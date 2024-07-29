<?php

namespace Database\Seeders;

use App\Models\GroundPodComment;
use Illuminate\Database\Seeder;

class GroundPodCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroundPodComment::factory()->count(9)->create();
    }
}
