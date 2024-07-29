<?php

namespace Database\Seeders;

use App\Models\WratsUserApplicationHistory;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User; 


class WratsUserApplicationHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WratsUserApplicationHistory::factory()->count(20)->create();
    }
}
