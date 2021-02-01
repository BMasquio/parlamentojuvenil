<?php

namespace App\Http\Middleware;

use Closure;

class Training
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
        if (!training_enabled()) {
            return redirect()->home();
        }

        loggedUser()->isTraining = true;

        loggedUser()->intendedRoute = 'training.content';

        return $next($request);
    }
}
