<?php

namespace Database\Seeders;

use App\Models\SubfileParty;
use Illuminate\Database\Seeder;

class SubfilePartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubfileParty::factory()->count(9)->create();
    }
}
