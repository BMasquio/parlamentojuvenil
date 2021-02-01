<?php

namespace App\Http\Middleware;

use App\Exceptions\AlreadySubscribed;
use Closure;

class CannotResubscribe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws AlreadySubscribed
     */
    public function handle($request, Closure $next)
    {
        if (loggedUser()->student->isSubscribed()) {
            throw new AlreadySubscribed();
        }

        return $next($request);
    }
}
