<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class OnlyAdministrators
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->isAdministrator()) {
            return redirect()
                ->route('home')
                ->withErrors(
                    'Você não está autorizado para acessar essa página'
                );
        }

        return $next($request);
    }
}
