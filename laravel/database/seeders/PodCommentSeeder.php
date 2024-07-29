<?php

namespace Database\Seeders;

use App\Models\PodComment;
use Illuminate\Database\Seeder;

class PodCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodComment::factory()->count(9)->create();
    }
}
