<?php

namespace Database\Seeders;

use App\Models\Pod;
use Illuminate\Database\Seeder;

class PodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pod::factory()->count(9)->create();
    }
}
