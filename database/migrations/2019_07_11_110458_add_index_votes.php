<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->index(['student_id']);
            $table->index(['subscription_id']);
            $table->index(['year']);
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->index(['elected_1nd']);
            $table->index(['elected_2nd']);
        });

        Schema::table('students', function (Blueprint $table) {
            $table->index(['registration']);
            $table->index(['name']);
            $table->index(['social_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
