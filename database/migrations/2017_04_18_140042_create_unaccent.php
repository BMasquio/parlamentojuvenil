<?php

use App\Data\Models\City;
use \DB as Database;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\PostgresConnection;

class CreateUnaccent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS unaccent;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP EXTENSION IF EXISTS unaccent');
    }
}
