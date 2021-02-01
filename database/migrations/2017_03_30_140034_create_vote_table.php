<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('subcription_id');
            $table->timestamps();
        });

        Schema::table('votes', function (Blueprint $table) {
            $table
                ->foreign('student_id')
                ->references('id')
                ->on('students');
            $table
                ->foreign('subcription_id')
                ->references('id')
                ->on('subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('votes');
    }
}
