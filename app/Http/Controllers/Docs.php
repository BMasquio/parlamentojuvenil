<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Docs extends BaseController
{
    public function terms($year = null)
    {
        return $this->buildView('docs.terms', $year, null, true);
    }

    public function privacy($year = null)
    {
        return $this->buildView('docs.privacy', $year, null, true);
    }
}
