<?php

namespace Database\Seeders;

use App\Models\abstractingDocumentOwner;
use Illuminate\Database\Seeder;

class abstractingDocumentOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstractingDocumentOwner::factory()->count(9)->create();
    }
}
