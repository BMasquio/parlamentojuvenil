<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Services\Instagram;

class Home extends BaseController
{
    public function force()
    {
        return $this->index(null, true);
    }

    public function index($year = null, $force = false)
    {
        return $this->buildView(
            'home.index',
            get_current_year($year),
            null,
            true
        )->with('instagramPictures', app(Instagram::class)->getImagesUrl(12));
    }
}
