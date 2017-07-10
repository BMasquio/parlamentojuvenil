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
        if (! config('app.flag.contest.subscriptions.enabled')) {
            return redirect()->home();
        }

        loggedUser()->isFlagContestSubscribing = true;

        return $next($request);
    }
}
