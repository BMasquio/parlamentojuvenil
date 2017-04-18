<?php

namespace App\Http\Controllers;

use Session;
use App\Data\Repositories\Data;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

	protected $redirectPath = '/dashboard';

    public function __construct(Data $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    /**
     * @param $force
     * @return mixed
     */
    public function buildView($view, $year = null, $force = false, $isHome = false)
    {
        return $this
                ->dataRepository
                ->viewBuilder
                ->buildViewData(
                    view($this->makeViewName($view, $year)),
                    $force,
                    $isHome,
                    $year
                );
    }

    protected function getLoggedUser()
    {
        return Session::get('logged-user');
    }

    public function getYear($year = null)
    {
        return $year = $year ?: config('app.year');
    }

    protected function makeViewName($name, $year = null)
    {
        return make_view_name_year_based($name, $year);
    }
}
