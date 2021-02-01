<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Is safe to run Cities seeder, it does not zap tables
        $this->call(CitiesSeeder::class);

        // Be careful!
        $this->call(SchoolsSeeder::class);

        Model::reguard();

        fix_cities();
    }
}
