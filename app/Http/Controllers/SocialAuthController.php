<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Data;
use DB;
use App\Services\SocialLogin\SocialUserService;

class SocialAuthController extends Controller
{
    protected $socialUserService;

    public function __construct(
        Data $dataRepository,
        SocialUserService $socialUserService
    ) {
        parent::__construct($dataRepository);

        $this->socialUserService = $socialUserService;
    }

    public function login($socialNetwork)
    {
        return $this->socialUserService->getDriver($socialNetwork)->redirect();
    }

    public function socialNetworkCallback($socialNetwork)
    {
        $this->socialUserService->socialNetworkLogin($socialNetwork);

        if (loggedUser()->isSubscribing) {
            return redirect()->route('subscribe.index');
        }

        return $this->redirectToIntended();
    }
}
