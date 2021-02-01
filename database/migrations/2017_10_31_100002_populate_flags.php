<?php

use App\Data\Models\Flag;
use Illuminate\Database\Migrations\Migration;

class PopulateFlags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $flags = [
            'Baixadas Litoraneas' => 'baixadaslitoraneas.jpg',
            'Centro Sul' => 'centrosul.jpg',
            'Medio Paraíba' => 'medioparaiba.jpg',
            'Metropolitana 1' => 'metro1.jpg',
            'Metropolitana 2' => 'metro2.jpg',
            'Metropolitana 3' => 'metro3.jpg',
            'Metropolitana 4' => 'metro4.jpg',
            'Metropolitana 5' => 'metro5.jpg',
            'Metropolitana 6' => 'metro6.jpg',
            'Metropolitana 7' => 'metro7.jpg',
            'Noroeste Fluminense' => 'noroesteflu.jpg',
            'Norte Fluminense' => 'norteflu.jpg',
            'Serrana I' => 'serranai.jpg',
            'Serrana II' => 'serranaii.jpg',
        ];

        collect($flags)->each(function ($filename, $name) {
            Flag::create([
                'name' => $name,
                'filename' => $filename,
                'year' => 2017,
            ]);
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
