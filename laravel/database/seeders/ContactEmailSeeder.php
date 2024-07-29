<?php

namespace Database\Seeders;

use App\Models\ContactEmail;
use Illuminate\Database\Seeder;

class ContactEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactEmail::factory()->count(9)->create();
    }
}
