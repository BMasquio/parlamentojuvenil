<?php

use App\Data\Models\City;
use App\Data\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SchoolsSeeder extends Seeder
{
    private $country;

    /**
     * @param $school
     * @return mixed
     */
    private function clearLine($school)
    {
        $school = str_replace("\n", '', $school);

        return $school;
    }

    public function export($file = 'UEs2016-full.txt')
    {
        $result = [];

        $lines = School::exclude('geolocation')
            ->get()
            ->toArray();

        $result[] = implode(';', array_keys($lines[0])) . "\n";

        foreach ($lines as $line) {
            $line['zip_code'] = str_replace("\n", '', $line['zip_code']);

            $result[] = implode(';', $line) . "\n";
        }

        Storage::disk('databases')->put($file, $result);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Try to seed a full database first
        School::truncate();

        // Try to seed a full database first
        echo "seedSchoolsFull\n";
        $this->seedSchoolsFull();

        // Try to get all e-mails from the database
        echo "seedSchoolsEmails\n";
        $this->seedSchoolsEmails();

        // Try to fill up all addresses
        echo "seedSchoolAddress\n";
        $this->seedSchoolAddress();

        // Fix all missing things
        echo "seedMissingSchools\n";
        $this->seedMissingSchools();

        Model::reguard();
    }

    public function runMissing()
    {
        $this->seedMissingSchools();
    }

    private function seedSchoolsFull()
    {
        $schools = $this->loadSchools('full', true);

        $columns = School::getColumns();

        $heading = explode(';', $schools[0]);

        unset($schools[0]);

        foreach ($schools as $school) {
            $school = $this->clearLine($school);

            $parts = explode(';', $school);

            $parts = array_combine($heading, array_values($parts));

            $parts = array_only($parts, $columns);

            School::create($parts);
        }
    }

    private function seedSchoolsEmails()
    {
        $schools = $this->loadSchools('emails');

        foreach ($schools as $school) {
            $school = $this->clearLine($school);

            $parts = explode("\t", $school);

            $school = School::firstOrNew(['censo' => $parts[0]]);

            $school->fill([
                'censo' => $parts[0],
                'regional' => $parts[1],
                'city' => $parts[2],
                'city_id' => $this->findCityByName($parts[2])->id,
                'name' => $parts[3],
                'email' => $parts[4],
            ]);

            $school->save();
        }
    }

    private function seedSchoolAddress()
    {
        $schools = $this->loadSchools('address');

        foreach ($schools as $school) {
            $school = $this->clearLine($school);

            $parts = explode("\t", $school);

            $model = School::where('censo', $parts[0])->first();

            if (!$model) {
                continue;
            }

            $model->designation = $parts[3];
            $model->address = $parts[5];
            $model->number = $parts[6];
            $model->complement = $parts[7];
            $model->neighborhood = $parts[8];
            $model->zip_code = $parts[9];

            $model->save();
        }
    }

    private function seedMissingSchools()
    {
        $schools = $this->loadSchools('missing');

        foreach ($schools as $school) {
            $school = $this->clearLine($school);

            $parts = explode("\t", $school);

            $model = School::where('censo', $parts[0])->first();

            if (!$model) {
                continue;
            }

            $model->designation = $parts[1];
            $model->address = $parts[3];
            $model->number = $parts[4];
            $model->neighborhood = $parts[5];
            $model->zip_code = $parts[8];
            $model->city = $parts[6];
            $model->city_id = $this->findCityByName($parts[6])->id;

            $model->save();
        }
    }

    private function loadSchools($kind = 'emails', $keepHeader = false)
    {
        $schools = file(
            __DIR__ .
                DIRECTORY_SEPARATOR .
                '/databases/UEs2016-' .
                $kind .
                '.txt'
        );

        if (!$keepHeader) {
            unset($schools[0]);
        }

        foreach ($schools as $key => $school) {
            $schools[$key] = str_replace("\n", '', $school);
        }

        return $schools;
    }

    private function findCityByName($city)
    {
        if (!($found = City::findCityByname($city))) {
            dd('City not found: ' . $city);
        }

        return $found;
    }
}
