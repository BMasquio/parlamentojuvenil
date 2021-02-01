<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSchoolAddressColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('designation')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->json('geolocation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->dropColumn('number')->nullable();
            $table->dropColumn('complement')->nullable();
            $table->dropColumn('neighborhood')->nullable();
            $table->dropColumn('zip_code')->nullable();
            $table->dropColumn('designation')->nullable();
            $table->dropColumn('geolocation')->nullable();
            $table->dropColumn('latitude')->nullable();
            $table->dropColumn('longitude')->nullable();
        });
    }
}
