<?php

namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdjudicationCourtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --table-mode --tables=adjudication_courts
         */
        $dataTables = [

        ];

        DB::table('adjudication_courts')->insert($dataTables);
    }
}
