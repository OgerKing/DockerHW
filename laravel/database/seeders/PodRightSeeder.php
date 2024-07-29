<?php

namespace Database\Seeders;

use App\Models\PodRight;
use Illuminate\Database\Seeder;

class PodRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodRight::factory()->count(9)->create();
    }
}
