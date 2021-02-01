<?php

use App\Data\Models\Flag;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValidFlagVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flag_votes', function (Blueprint $table) {
            $table->string('registration')->nullable();
            $table->boolean('is_valid')->default(true);
        });

        Flag::with('votes')
            ->get()
            ->each(function ($flag) {
                $flag->votes->each(function ($vote) {
                    $vote->registration = $vote->student->registration;
                    $vote->save();
                });
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flag_votes', function (Blueprint $table) {
            $table->dropColumn('registration')->nullable();
            $table->dropColumn('is_valid');
        });
    }
}
