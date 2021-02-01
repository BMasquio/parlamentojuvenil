<?php

use \DB as Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearToWatched extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('watched', function (Blueprint $table) {
            $table->string('year')->default(2016);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('watched', function (Blueprint $table) {
            $table->dropColumn('year');
        });
    }
}
