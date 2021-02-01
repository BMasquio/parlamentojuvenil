<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudentAge
{
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
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
        if (!loggedUser()->student->hasRightAge()) {
            return redirect()->route('auth.student.wrong-age');
        }

        return $next($request);
    }
}
