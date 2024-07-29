<?php

namespace Database\Seeders;

use App\Models\UseCodes;
use Illuminate\Database\Seeder;

class UseCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UseCodes::factory()->count(9)->create();
    }
}
