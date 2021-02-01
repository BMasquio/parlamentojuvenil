<?php

namespace App\Services\SeeducImporter;

use DB;
use Carbon\Carbon;
use League\Csv\Reader;
use Illuminate\Support\Str;
use App\Data\Models\Seeduc as Model;
use App\Data\Models\School as SchoolModel;
use App\Data\Models\City as CityModel;

class Service
{
    protected $command;

    protected $fields = [
        'escola',
        'municipio',
        'regional',
        'nome',
        'matricula',
        'nascimento',
    ];

    public function __construct($command = null)
    {
        $this->command = $command;
    }

    private function getFirstLine($reader)
    {
        $row = '';

        foreach ($reader as $index => $row) {
            if ($index == 0) {
                break;
            }
        }

        return $row[0];
    }

    public function import($file = null, $dontTruncate = true)
    {
        ini_set('auto_detect_line_endings', '1');
        ini_set('max_execution_time', 0);

        DB::transaction(function () use ($file, $dontTruncate) {
            $reader = $this->read($file);

            if (!$dontTruncate) {
                DB::statement('delete from seeduc');
            }

            $counter = 0;

            foreach ($reader as $index => $row) {
                if ($index == 0) {
                    continue;
                }

                if (count($row) !== 6) {
                    continue;
                }

                $line = '';
                collect($row)->each(function ($item) use (&$line) {
                    $line .= utf8_encode($item) . ';';
                });

                try {
                    $model = Model::updateOrCreate(
                        ['matricula' => utf8_encode($row[4])],
                        [
                            'escola' => utf8_encode($row[0]),
                            'municipio' => utf8_encode($row[1]),
                            'regional' => utf8_encode($row[2]),
                            'nome' => utf8_encode($row[3]),
                            'matricula' => utf8_encode($row[4]),
                            'nascimento' => $this->toDate(
                                utf8_encode($row[5]),
                                'Y-m-d H:i:s.u'
                            ),
                        ]
                    );
                } catch (\Exception $exception) {
                    dump(class_basename($exception));
                    dump($exception->getMessage());
                    dump($line);
                    continue;
                }

                $counter++;

                if ($counter < 5 or $counter % 1000 == 0) {
                    $this->info($counter . ' - ' . $model->id . ' -> ' . $line);
                }
            }
        });
    }

    public function importSchools($file = null, $dontTruncate = true)
    {
        ini_set('auto_detect_line_endings', '1');
        ini_set('max_execution_time', 0);

        DB::transaction(function () use ($file, $dontTruncate) {
            $reader = $this->read($file, ';');

            if (!$dontTruncate) {
                DB::statement('delete from schools');
            }

            $counter = 0;

            foreach ($reader as $index => $row) {
                if ($index == 0) {
                    continue;
                }

                if (count($row) !== 12) {
                    continue;
                }

                $line = '';
                collect($row)->each(function ($item) use (&$line) {
                    $line .= utf8_encode($item) . ';';
                });

                try {
                    if (
                        SchoolModel::where(
                            'censo',
                            utf8_encode($row[1])
                        )->count() > 0
                    ) {
                        $model = SchoolModel::updateOrCreate(
                            ['censo' => utf8_encode($row[1])],
                            [
                                'address' => utf8_encode($row[2]),
                                'number' => utf8_encode($row[3]),
                                'complement' => utf8_encode($row[4]),
                                'neighborhood' => utf8_encode($row[5]),
                                'city' => utf8_encode($row[6]),
                                'regional' => utf8_encode($row[8]),
                                'zipcode' => utf8_encode($row[9]),
                                'email' => utf8_encode($row[10]),
                                'designation' => utf8_encode($row[11]),
                                'city_id' => CityModel::where(
                                    'name',
                                    utf8_encode($row[6])
                                )->first()->id,
                                'ua' => '',
                                'phone' => '',
                            ]
                        );
                    } else {
                        $model = SchoolModel::updateOrCreate(
                            ['censo' => utf8_encode($row[1])],
                            [
                                'id' => SchoolModel::max('id') + 1,
                                'name' => utf8_encode($row[0]),
                                'censo' => utf8_encode($row[1]),
                                'address' => utf8_encode($row[2]),
                                'number' => utf8_encode($row[3]),
                                'complement' => utf8_encode($row[4]),
                                'neighborhood' => utf8_encode($row[5]),
                                'city' => utf8_encode($row[6]),
                                'regional' => utf8_encode($row[8]),
                                'zipcode' => utf8_encode($row[9]),
                                'email' => utf8_encode($row[10]),
                                'designation' => utf8_encode($row[11]),
                                'city_id' => CityModel::where(
                                    'name',
                                    utf8_encode($row[6])
                                )->first()->id,
                                'ua' => '',
                                'phone' => '',
                            ]
                        );
                    }
                } catch (\Exception $exception) {
                    dump(class_basename($exception));
                    dump($exception->getMessage());
                    dump($line);
                    continue;
                }

                $counter++;

                //if ($counter < 5 or $counter % 1000 == 0) {
                $this->info($counter . ' - ' . $model->id . ' -> ' . $line);
                //}
            }
        });
    }

    public function info($message)
    {
        $this->command && $this->command->info($message);
    }

    public function isValid($fileName)
    {
        $row = $this->getFirstLine($this->read($fileName));

        foreach (explode("\t", $row) as $index => $field) {
            if (Str::lower($this->fields[$index]) !== Str::lower($field)) {
                return false;
            }
        }

        return true;
    }

    private function read($fileName = null, $delimiter = "\t")
    {
        $reader = Reader::createFromPath(
            $fileName ?: database_path(env('SEEDUC_CSV_FILE'))
        );

        $reader->setDelimiter($delimiter);

        return $reader;
    }

    protected function toDate($date, $format = 'd/m/y')
    {
        try {
            return Carbon::createFromFormat($format, $date)->toDateString();
        } catch (\Exception $exception) {
            return Carbon::createFromFormat($format, $date)->toDateString();
        }
    }
}
