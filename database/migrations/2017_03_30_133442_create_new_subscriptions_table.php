<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('student_id');
            $table->string('year')->nullable();
            //  $table->timestamps();
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table
                ->foreign('student_id')
                ->references('id')
                ->on('students');
        });

        Schema::table('subscriptions', function () {
            DB::insert(
                'insert into subscriptions (student_id) select id from students'
            );
            DB::update('update subscriptions set year=\'2016\'');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subscriptions');
    }
}
