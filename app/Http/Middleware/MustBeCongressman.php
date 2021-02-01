<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class MustBeCongressman
{
    public function handle($request, Closure $next)
    {
        if (!loggedUser()->isCongressman()) {
            return redirect()->route('must.be.congressman');
        }

        return $next($request);
    }
}
