<?php

namespace App\Http\Middleware;

use Closure;

class Subscribing
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
        loggedUser()->isSubscribing = true;

        loggedUser()->intendedRoute = 'subscribe.index';

        return $next($request);
    }
}
