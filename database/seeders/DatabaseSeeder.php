<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Is safe to run Cities seeder, it does not zap tables
        $this->call(CitiesSeeder::class);

        // Be careful!
        $this->call(SchoolsSeeder::class);

        fix_cities();
    }
}
