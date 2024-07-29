<?php

namespace Database\Seeders;

use App\Models\Bureau;
use Illuminate\Database\Seeder;

class BureauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bureauNames = ['New Mexico', 'Pecos', 'Lower Rio Grande', 'Pueblos, Tribes, & Nations'];

        foreach ($bureauNames as $name) {
            Bureau::factory()->create([
                'bureau_name' => $name,
            ]);
        }
    }
}
