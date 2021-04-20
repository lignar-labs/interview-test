<?php

namespace Database\Seeders;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

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
        // Eloquent::unguard();
        $this->call([
            UserTableSeeder::class,
        ]);
    }
}
