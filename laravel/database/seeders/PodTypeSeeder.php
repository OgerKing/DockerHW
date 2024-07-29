<?php

namespace Database\Seeders;

use App\Models\PodType;
use Illuminate\Database\Seeder;

class PodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodType::factory()->count(9)->create();
    }
}
