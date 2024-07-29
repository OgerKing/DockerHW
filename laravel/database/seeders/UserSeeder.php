<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // created myself a user row for testing
        User::factory()->myLogin()->create();

        // Create other users
       // User::factory(10)->create();


        // create test users
        DB::table('users')->insert([
            'name' => "WRATS_SystemAdmin_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_LawClerk_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_Attorney_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_AttorneySupervisor_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);
        
        DB::table('users')->insert([
            'name' => "WRATS_Hydrographic Survey_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_LAP Administrator_user	",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);
     
        DB::table('users')->insert([
            'name' => "WRATS_ReportOSEwideAdmin_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_ReportBureauAdmin_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_PDOSEwideAdmin_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);

        DB::table('users')->insert([
            'name' => "WRATS_PDtBureauAdmin_user",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('p@leStamp65'),
        ]);


     
    }
}
