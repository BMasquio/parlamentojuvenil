<?php

namespace App\Http\Middleware;

use Closure;

class FlagContestSubscribing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!flag_contest_subscription_enabled()) {
            return redirect()->home();
        }

        loggedUser()->isFlagContestSubscribing = true;

        loggedUser()->intendedRoute = 'flag-contest.subscribe.index';

        return $next($request);
    }
}
