<?php

namespace App\Http\Middleware;

use Closure;

class Voting
{
    /**
     * Create a new filter instance.
     *
     */
    public function __construct()
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!config('app.election.enabled')) {
            return redirect()->home();
        }

        loggedUser()->isVoting = true;

        loggedUser()->intendedRoute = 'vote.index';

        return $next($request);
    }
}
