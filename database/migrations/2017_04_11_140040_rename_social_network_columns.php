<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameSocialNetworkColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('name', 'name_old');
        });

        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('slug', 'name');
        });

        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('name_old', 'slug');
        });

        //        DB::statement('delete from social_networks;');
        //        DB::table('social_networks')->insert(['name' => 'Facebook', 'slug' => 'facebook']);
        //        DB::table('social_networks')->insert(['name' => 'Twitter', 'slug' => 'twitter']);
        //        DB::table('social_networks')->insert(['name' => 'Youtube', 'slug' => 'youtube']);
        //        DB::table('social_networks')->insert(['name' => 'Linkedin', 'slug' => 'linkedin']);
        //        DB::table('social_networks')->insert(['name' => 'Instagram', 'slug' => 'instagram']);
        //        DB::table('social_networks')->insert(['name' => 'E-mail', 'slug' => 'email']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('slug', 'slug_old');
        });

        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('name', 'slug');
        });

        Schema::table('social_networks', function (Blueprint $table) {
            $table->renameColumn('slug_old', 'name');
        });
    }
}
