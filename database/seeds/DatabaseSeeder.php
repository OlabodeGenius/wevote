<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(seed_parties::class);
        $this->call(state_seeder::class);
        $this->call(lga_seeder::class);
    }
}