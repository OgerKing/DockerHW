<?php

namespace Database\Seeders;

use App\Models\UseCode;
use Illuminate\Database\Seeder;

class UseCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UseCode::factory()->count(9)->create();
    }
}
