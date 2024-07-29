<?php

namespace Database\Seeders;

use App\Models\PodUse;
use Illuminate\Database\Seeder;

class PodUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodUse::factory()->count(9)->create();
    }
}
