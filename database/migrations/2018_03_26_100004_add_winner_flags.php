<?php

use App\Data\Models\Flag;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWinnerFlags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flags', function (Blueprint $table) {
            $table->integer('winner_position')->nullable();
            $table->text('winner_description')->nullable();
        });

        Flag::where('filename', 'metro7.jpg')
            ->get()
            ->each(function ($flag) {
                $flag->winner_position = 1;

                $flag->winner_description =
                    'Felipe dos Santos Stum - 18 anos - 3° ano do ensino médio - CIEP 179 Prof. Cláudio Gama';

                $flag->save();
            });

        Flag::where('filename', 'metro3.jpg')
            ->get()
            ->each(function ($flag) {
                $flag->winner_position = 2;

                $flag->winner_description =
                    'Yasmin Silvares de Azevedo - 17 anos - 2° ano do Ensino médio - CIEP 323 Maria Werneck de Castro';

                $flag->save();
            });

        Flag::where('filename', 'metro4.jpg')
            ->get()
            ->each(function ($flag) {
                $flag->winner_position = 3;

                $flag->winner_description =
                    'João Pedro Grangeiro Monteiro - 17 anos - 3° ano do ensino médio - CIEP 165 Brigadeiro Sérgio Carvalho';

                $flag->save();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flags', function (Blueprint $table) {
            $table->dropColumn('winner_position');
            $table->dropColumn('winner_description');
        });
    }
}
