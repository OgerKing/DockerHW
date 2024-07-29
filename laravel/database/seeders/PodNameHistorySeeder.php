<?php

namespace Database\Seeders;

use App\Models\PodNameHistory;
use Illuminate\Database\Seeder;

class PodNameHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodNameHistory::factory()->count(9)->create();
    }
}
