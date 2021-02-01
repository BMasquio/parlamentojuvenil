<?php

use Illuminate\Database\Migrations\Migration;

class PopulateSocialNetworkEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('social_networks')->insert([
            'name' => 'email',
            'slug' => 'E-mail',
        ]);
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
