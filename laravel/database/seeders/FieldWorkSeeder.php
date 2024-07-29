<?php

namespace Database\Seeders;

use App\Models\FieldWork;
use Illuminate\Database\Seeder;

class FieldWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FieldWork::factory()->count(9)->create();
    }
}
