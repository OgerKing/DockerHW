<?php

namespace Database\Seeders;

use App\Models\PouComment;
use Illuminate\Database\Seeder;

class PouCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PouComment::factory()->count(9)->create();
    }
}
