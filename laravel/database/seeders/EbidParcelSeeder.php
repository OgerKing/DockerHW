<?php

namespace Database\Seeders;

use App\Models\EbidParcel;
use Illuminate\Database\Seeder;

class EbidParcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EbidParcel::factory()->count(9)->create();
    }
}
