<?php

namespace Database\Seeders;

use App\Models\PodDbFile;
use Illuminate\Database\Seeder;

class PodDbFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PodDbFile::factory()->count(9)->create();
    }
}
