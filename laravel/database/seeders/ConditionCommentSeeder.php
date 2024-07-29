<?php

namespace Database\Seeders;

use App\Models\ConditionComment;
use Illuminate\Database\Seeder;

class ConditionCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConditionComment::factory()->count(9)->create();
    }
}
