<?php

namespace App\Listeners;

use App\Data\Repositories\Data;
use App\Events\SubscriptionWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSubscriptionCreatedMail
{
    /**
     * @var Data
     */
    protected $dataRepository;

    /**
     * Create the event listener.
     *
     */
    public function __construct(Data $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    /**
     * Handle the event.
     *
     * @param SubscriptionWasCreated $event
     */
    public function handle(SubscriptionWasCreated $event)
    {
        $this->dataRepository->sendSubscriptionCreatedMail(
            $event->subscription
        );
    }
}
