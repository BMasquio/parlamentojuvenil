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
            $table->dropIndex('votes_student_id_index');
            $table->index(['student_id']);
            $table->dropIndex('votes_subscription_id_index');
            $table->index(['subscription_id']);
            $table->dropIndex('votes_year_index');
            $table->index(['year']);
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropIndex('subscriptions_elected_1nd_index');
            $table->index(['elected_1nd']);
            $table->dropIndex('subscriptions_elected_2nd_index');
            $table->index(['elected_2nd']);
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropIndex('students_registration_index');
            $table->index(['registration']);
            $table->dropIndex('students_name_index');
            $table->index(['name']);
            $table->dropIndex('students_social_name_index');
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
