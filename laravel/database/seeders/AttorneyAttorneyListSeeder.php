<?php

namespace Database\Seeders;

use App\Models\AttorneyAttorneyList;
use Illuminate\Database\Seeder;

class AttorneyAttorneyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttorneyAttorneyList::factory()->count(9)->create();
    }
}
