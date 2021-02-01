<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeStudentsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table
                ->string('name')
                ->nullable()
                ->change();
            $table
                ->string('social_name')
                ->nullable()
                ->change();
            $table
                ->string('city')
                ->nullable()
                ->change();
            $table
                ->string('school')
                ->nullable()
                ->change();
            $table
                ->string('gender')
                ->nullable()
                ->change();
            $table
                ->string('gender2')
                ->nullable()
                ->change();
            $table
                ->string('cpf')
                ->nullable()
                ->change();
            $table
                ->string('id_number')
                ->nullable()
                ->change();
            $table
                ->string('id_issuer')
                ->nullable()
                ->change();
            $table
                ->string('email')
                ->nullable()
                ->change();
            $table
                ->string('phone_home')
                ->nullable()
                ->change();
            $table
                ->string('phone_cellular')
                ->nullable()
                ->change();
            $table
                ->string('zip_code')
                ->nullable()
                ->change();
            $table
                ->string('address')
                ->nullable()
                ->change();
            $table
                ->string('address_complement')
                ->nullable()
                ->change();
            $table
                ->string('address_neighborhood')
                ->nullable()
                ->change();
            $table
                ->string('address_city')
                ->nullable()
                ->change();
            $table
                ->string('facebook')
                ->nullable()
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
