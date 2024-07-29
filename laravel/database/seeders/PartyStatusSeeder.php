<?php

namespace Database\Seeders;

use App\Models\PartyStatus;
use Illuminate\Database\Seeder;

class PartyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartyStatus::factory()->count(9)->create();
    }
}
