<?php

use DB as Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrimSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Database::statement(
            Database::raw(
                "update schools set name = trim(regexp_replace(regexp_replace(name, E'[\\n\\r]+', ' ', 'g'), '-+$', ''));"
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
