<?php

namespace Database\Seeders;

use App\Models\ContactAddress;
use Illuminate\Database\Seeder;

class ContactAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactAddress::factory()->count(9)->create();
    }
}
