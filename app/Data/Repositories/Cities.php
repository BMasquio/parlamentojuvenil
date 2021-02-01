<?php

namespace App\Data\Repositories;

use DB;
use App\Models\City;
use App\Models\School;
use App\Models\Student;

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
