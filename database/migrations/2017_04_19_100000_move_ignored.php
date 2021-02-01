<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveIgnored extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('ignored');
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->boolean('ignored')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->boolean('ignored')->default(false);
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn('ignored');
        });
    }
}
