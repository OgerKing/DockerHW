<?php

namespace Database\Seeders;

use App\Models\PartyInterestType;
use Illuminate\Database\Seeder;

class PartyInterestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyInterestType::factory()->count(9)->create();
    }
}
