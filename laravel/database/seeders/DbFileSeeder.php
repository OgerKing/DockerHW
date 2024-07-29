<?php

namespace Database\Seeders;

use App\Models\DbFile;
use Illuminate\Database\Seeder;

class DbFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DbFile::factory()->count(9)->create();
    }
}
