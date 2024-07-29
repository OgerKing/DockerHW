<?php

namespace Database\Seeders;

use App\Models\Grant;
use Illuminate\Database\Seeder;

class GrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grant::factory()->count(9)->create();
    }
}
