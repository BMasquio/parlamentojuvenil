<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class ComingSoon extends BaseController
{
    public function index()
    {
        return view('coming-soon');
    }
}
