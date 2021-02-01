<?php

use Illuminate\Database\Migrations\Migration;

class PopulateSocialNetworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('social_networks')->insert([
            'name' => 'facebook',
            'slug' => 'Facebook',
        ]);
        DB::table('social_networks')->insert([
            'name' => 'twitter',
            'slug' => 'Twitter',
        ]);
        DB::table('social_networks')->insert([
            'name' => 'youtube',
            'slug' => 'Youtube',
        ]);
        DB::table('social_networks')->insert([
            'name' => 'linkedin',
            'slug' => 'Linkedin',
        ]);
        DB::table('social_networks')->insert([
            'name' => 'instagram',
            'slug' => 'Instagram',
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
