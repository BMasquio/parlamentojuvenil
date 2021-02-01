<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code');
            $table->text('heading');
            $table->text('subheading');
            $table->text('body');
            $table->integer('edition');
            $table->string('image');
            $table->date('date')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('featured');
            $table->string('youtube_url');
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
        Schema::drop('articles');
    }
}
