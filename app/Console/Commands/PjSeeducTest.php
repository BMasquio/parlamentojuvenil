<?php

namespace App\Console\Commands;

use App\Models\Seeduc;
use App\Models\SocialUser;
use App\Models\Student;
use App\Models\Subscription;
use App\Http\Controllers\Subscriptions;
use League\Csv\Statement;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\SeeducImporter\Service as SeeducImporter;

class PjSeeducTest extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:seeduc:test-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed seeduc test data';

    private function getData()
    {
        return collect([
            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'FACEBOOK DO NASCIMENTO PELICIONI',
                'matricula' => '001FACEBOOK',
                'nascimento' => '2004-04-12',
            ],

            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'ANTONIO CARLOS DO NASCIMENTO PELICIONI',
                'matricula' => '002ANTONIOCARLOS',
                'nascimento' => '2004-10-31',
            ],

            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'BRENOT NASCIMENTO PELICIONI',
                'matricula' => '003BRENOT',
                'nascimento' => '2004-01-01',
            ],

            [
                'escola' => 'CE ALVARO ALVIM',
                'municipio' => 'MIGUEL PEREIRA',
                'regional' => 'CENTRO SUL',
                'nome' => 'BRUNO CAMPOS BARBOSA',
                'matricula' => '004BRUNO',
                'nascimento' => '2004-02-02',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'FILIPE RODRIGUES CARDOSO',
                'matricula' => '005FILIPE',
                'nascimento' => '2004-03-03',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'BRUNO MASQUIO - TESTE',
                'matricula' => '007BRUNO',
                'nascimento' => '2004-03-03',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'ORLANDO - TESTE',
                'matricula' => '008ORLANDO',
                'nascimento' => '2004-03-03',
            ],
        ]);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->getData()->each(function ($record) {
            $seeduc = Seeduc::where('matricula', $record['matricula'])->first();

            if ($seeduc) {
                $student = Student::where(
                    'registration',
                    $seeduc->matricula
                )->first();

                if ($student) {
                    Subscription::where('student_id', $student->id)->delete();

                    $socialUser = SocialUser::where(
                        'student_id',
                        $student->id
                    )->first();

                    if ($socialUser) {
                        $socialUser->delete();
                    }

                    $student->delete();
                }

                $seeduc->delete();
            }

            Seeduc::create($record);

            $this->info(
                sprintf(
                    'created: %s - %s',
                    $record['nome'],
                    $record['matricula']
                )
            );
        });
    }
}
