<?php

namespace Database\Seeders;

use App\Models\PartyTypeSubtype;
use Illuminate\Database\Seeder;

class PartyTypeSubtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyTypeSubtype::factory()->count(9)->create();
    }
}
