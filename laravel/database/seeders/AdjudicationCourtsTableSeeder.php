<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdjudicationCourtsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('adjudication_courts')->delete();

    }
}
