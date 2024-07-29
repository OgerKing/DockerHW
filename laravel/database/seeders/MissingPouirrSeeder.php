<?php

namespace Database\Seeders;

use App\Models\MissingPouirr;
use Illuminate\Database\Seeder;

class MissingPouirrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MissingPouirr::factory()->count(9)->create();
    }
}
