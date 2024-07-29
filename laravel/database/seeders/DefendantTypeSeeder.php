<?php

namespace Database\Seeders;

use App\Models\DefendantType;
use Illuminate\Database\Seeder;

class DefendantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DefendantType::factory()->count(9)->create();
    }
}
