<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('social_name');
            $table->string('city');
            $table->string('school');
            $table->string('registration');
            $table->string('gender');
            $table->string('gender2');
            $table->string('birthdate');
            $table->string('cpf');
            $table->string('id_number');
            $table->string('id_issuer');
            $table->string('email');
            $table->string('phone_home');
            $table->string('phone_cellular');
            $table->string('zip_code');
            $table->string('address');
            $table->string('address_complement');
            $table->string('address_neighborhood');
            $table->string('address_city');
            $table->string('facebook');

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
        Schema::drop('subscriptions');
    }
}
