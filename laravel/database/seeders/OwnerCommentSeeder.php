<?php

namespace Database\Seeders;

use App\Models\OwnerComment;
use Illuminate\Database\Seeder;

class OwnerCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OwnerComment::factory()->count(9)->create();
    }
}
