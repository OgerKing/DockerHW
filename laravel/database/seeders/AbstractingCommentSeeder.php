<?php

namespace Database\Seeders;

use App\Models\abstractingComment;
use Illuminate\Database\Seeder;

class abstractingCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstractingComment::factory()->count(9)->create();
    }
}
