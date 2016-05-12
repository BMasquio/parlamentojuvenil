<?php

use App\Data\Entities\City;
use App\Data\Entities\School;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SchoolsSeeder extends Seeder
{
	private $country;

	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//        $this->seedSchools();
        $this->seedSchoolAddress();

        Model::reguard();
    }

	private function seedSchools()
	{
		School::truncate();

		$schools = $this->loadSchools();

		foreach ($schools as $school)
		{
            $school = str_replace("\n", "", $school);

			$parts = explode("\t", $school);

			School::create([
				'regional' => $parts[1],
				'city' => $parts[2],
				'city_id' => $this->findCityByName($parts[2])->id,
				'censo' => $parts[0],
				'name' => $parts[3],
                'email' => $parts[4],
				'address' => '', // $parts[3],
				'phone' => '', //$parts[4],
				'ua' => '', //$parts[1],
			]);
		}
	}

    private function seedSchoolAddress()
    {
        $schools = $this->loadSchools('address');

        foreach ($schools as $school)
        {
            $parts = explode("\t", $school);

            $model = School::where('censo', $parts[0])->first();

            if (! $model)
            {
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

	private function loadSchools($kind = 'emails')
	{
		$schools = file(__DIR__.DIRECTORY_SEPARATOR.'/databases/UEs2016-'.$kind.'.txt');

		unset($schools[0]);

		return $schools;
	}

	private function findCityByName($city)
	{
		if ( ! $found = City::where(DB::raw('unaccent(name)'), '~*', $city)->first())
		{
			dd('City not found: ' . $city);
		}

		return $found;
	}
}
