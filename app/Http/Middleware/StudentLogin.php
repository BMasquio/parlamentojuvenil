<?php

namespace App\Http\Middleware;

use Closure;

class StudentLogin
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
        if (!loggedUser()->userIsLogged()) {
            return redirect()->route('auth.login.email.student');
        }

        if (
            !loggedUser()->studentIsLogged() &&
            !loggedUser()->voterIsLogged()
        ) {
            return redirect()->route('student.identify');
        }

        return $next($request);
    }
}
