<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlagVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('filename');
            $table->integer('year');
            $table->timestamps();
        });

        Schema::create('flag_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flag_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flag_votes');
        Schema::drop('flags');
    }
}
