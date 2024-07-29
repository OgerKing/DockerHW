<?php

namespace Database\Seeders;

use App\Models\PartyType;
use Illuminate\Database\Seeder;

class PartyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyType::factory()->count(9)->create();
    }
}
