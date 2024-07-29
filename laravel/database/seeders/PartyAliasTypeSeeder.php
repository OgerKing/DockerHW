<?php

namespace Database\Seeders;

use App\Models\PartyAliasType;
use Illuminate\Database\Seeder;

class PartyAliasTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyAliasType::factory()->count(9)->create();
    }
}
