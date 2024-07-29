<?php

namespace Database\Seeders;

use App\Models\AttorneyListing;
use Illuminate\Database\Seeder;

class AttorneyListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttorneyListing::factory()->count(9)->create();
    }
}
