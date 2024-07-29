<?php

namespace Database\Seeders;

use App\Models\abstracting;
use Illuminate\Database\Seeder;

class AbstractingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstracting::factory()->count(9)->create();
    }
}
