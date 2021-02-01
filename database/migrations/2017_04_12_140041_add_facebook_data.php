<?php

use App\Data\Models\Seeduc;
use Illuminate\Database\Migrations\Migration;

class AddFacebookData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Seeduc::create([
            'escola' => 'CE AGOSTINHO PORTO',
            'municipio' => 'SÃO JOÃO DE MERITI',
            'regional' => 'METROPOLITANA VII',
            'nome' => 'FACEBOOK DO NASCIMENTO PELICIONI',
            'matricula' => '001FACEBOOK',
            'nascimento' => '2017-04-12',
        ]);

        Seeduc::create([
            'escola' => 'CE AGOSTINHO PORTO',
            'municipio' => 'SÃO JOÃO DE MERITI',
            'regional' => 'METROPOLITANA VII',
            'nome' => 'ANTONIO CARLOS DO NASCIMENTO PELICIONI',
            'matricula' => '002ANTONIOCARLOS',
            'nascimento' => '1970-10-31',
        ]);

        Seeduc::create([
            'escola' => 'CE AGOSTINHO PORTO',
            'municipio' => 'SÃO JOÃO DE MERITI',
            'regional' => 'METROPOLITANA VII',
            'nome' => 'BRENOT NASCIMENTO PELICIONI',
            'matricula' => '003BRENOT',
            'nascimento' => '2000-01-01',
        ]);

        Seeduc::create([
            'escola' => 'CE ALVARO ALVIM',
            'municipio' => 'MIGUEL PEREIRA',
            'regional' => 'CENTRO SUL',
            'nome' => 'BRUNO CAMPOS BARBOSA',
            'matricula' => '004BRUNO',
            'nascimento' => '2000-02-02',
        ]);

        Seeduc::create([
            'escola' => 'CE BARAO DE TINGUA',
            'municipio' => 'NOVA IGUAÇU',
            'regional' => 'METROPOLITANA I',
            'nome' => 'FILIPE RODRIGUES CARDOSO',
            'matricula' => '005FILIPE',
            'nascimento' => '2000-03-03',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Seeduc::where('matricula', '001FACEBOOK')->delete();
        Seeduc::where('matricula', '002ANTONIOCARLOS')->delete();
        Seeduc::where('matricula', '003BRENOT')->delete();
        Seeduc::where('matricula', '004BRUNO')->delete();
        Seeduc::where('matricula', '005FILIPE')->delete();
    }
}
