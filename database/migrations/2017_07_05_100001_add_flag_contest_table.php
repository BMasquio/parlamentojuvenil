<?php

use \DB as Database;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flag_contest', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('student_id');

            $table->string('year');

            $table->string('email')->index();

            $table->boolean('ignored')->default(false);

            $table->string('confirmation_key')->index();

            $table->timestamp('confirmed_at')->nullable();

            $table->timestamps();
        });

        Database::statement(
            'ALTER SEQUENCE flag_contest_id_seq MINVALUE 311070 START WITH 311070 RESTART WITH 311070'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flag_contest');
    }
}
