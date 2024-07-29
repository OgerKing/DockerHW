<?php

namespace Database\Seeders;

use App\Models\ContactTelephone;
use Illuminate\Database\Seeder;

class ContactTelephoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactTelephone::factory()->count(9)->create();
    }
}
