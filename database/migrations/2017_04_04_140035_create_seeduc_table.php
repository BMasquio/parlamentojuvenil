<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeeducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeduc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('escola')->index();
            $table->string('municipio')->index();
            $table->string('regional')->index();
            $table->string('nome')->index();
            $table->string('matricula')->index();
            $table->date('nascimento')->index();
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
        Schema::drop('seeduc');
    }
}
