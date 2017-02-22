<?php

namespace App\Providers;

use App\Events\SubscriptionWasCreated;
use App\Listeners\SendSubscriptionCreatedMail;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SubscriptionWasCreated::class => [
            SendSubscriptionCreatedMail::class,
        ],

        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\YouTube\YouTubeExtendSocialite@handle',
            'SocialiteProviders\Instagram\InstagramExtendSocialite@handle',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
