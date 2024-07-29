<?php

namespace Database\Seeders;

use App\Models\AttorneyList;
use Illuminate\Database\Seeder;

class AttorneyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttorneyList::factory()->count(9)->create();
    }
}
