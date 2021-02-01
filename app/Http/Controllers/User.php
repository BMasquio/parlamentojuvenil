<?php

namespace App\Http\Controllers;

use Auth;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Http\Controllers\Controller as BaseController;

class User extends BaseController
{
    /**
     * @var Subscriptions
     */
    protected $subscriptionsRepository;

    public function __construct(
        Data $dataRepository,
        Subscriptions $subscriptionsRepository
    ) {
        parent::__construct($dataRepository);

        $this->dataRepository = $dataRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    public function forgetMe()
    {
        $this->subscriptionsRepository->removeSocialAccount();

        return redirect()->route('home');
    }
}
