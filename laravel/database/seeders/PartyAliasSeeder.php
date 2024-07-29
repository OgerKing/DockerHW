<?php

namespace Database\Seeders;

use App\Models\PartyAlias;
use Illuminate\Database\Seeder;

class PartyAliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyAlias::factory()->count(9)->create();
    }
}
