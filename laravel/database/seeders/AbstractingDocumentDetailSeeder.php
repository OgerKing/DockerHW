<?php

namespace Database\Seeders;

use App\Models\abstractingDocumentDetail;
use Illuminate\Database\Seeder;

class abstractingDocumentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        abstractingDocumentDetail::factory()->count(9)->create();
    }
}
