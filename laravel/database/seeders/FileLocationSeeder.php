<?php

namespace Database\Seeders;

use App\Models\FileLocation;
use Illuminate\Database\Seeder;

class FileLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FileLocation::factory()->count(9)->create();
    }
}
