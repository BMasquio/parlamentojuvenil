<?php

namespace App\Data\Repositories;

use DB;
use App\Data\Models\City;
use App\Data\Models\School;
use App\Data\Models\Student;

class Cities
{
    public function fixCities()
    {
        DB::transaction(function () {
            City::where('name', 'PARATI')->update(['name' => 'PARATY']);

            School::where('city', 'PARATI')->update(['city' => 'PARATY']);

            Student::where('city', 'PARATI')->update(['city' => 'PARATY']);
        });
    }
}
