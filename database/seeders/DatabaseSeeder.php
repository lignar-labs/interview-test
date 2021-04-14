<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //TODO: seed 10 user
        for ($i=0; $i < 10; $i++) { 
        DB::table('users')->insert([
            'name' => Str::random(8),
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        }
    }
}
