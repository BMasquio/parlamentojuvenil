<?php

use App\Data\Models\Flag;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinalist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flags', function (Blueprint $table) {
            $table->boolean('finalist')->default(false);
        });

        Flag::whereIn('filename', ['metro3.jpg', 'metro4.jpg', 'metro7.jpg'])
            ->get()
            ->each(function ($flag) {
                $flag->finalist = true;

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
            $table->dropColumn('finalist');
        });
    }
}
