<?php

namespace Database\Seeders;

use App\Models\BasinUser;
use Illuminate\Database\Seeder;

class BasinUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BasinUser::factory()->count(9)->create();
    }
}
