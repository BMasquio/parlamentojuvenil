<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveElected extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->boolean('elected_1nd')->default(false);

            $table->boolean('elected_2nd')->default(false);

            $table->timestamp('created_at')->default(DB::raw('NOW()'));

            $table->timestamp('updated_at')->default(DB::raw('NOW()'));
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('elected');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn('elected_1nd');

            $table->dropColumn('elected_2nd');

            $table->dropColumn('created_at');

            $table->dropColumn('updated_at');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->boolean('elected')->default(false);
        });
    }
}
