<?php

namespace App\Http\Middleware;

use Closure;

class FlagContestVoting
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
        if (!flag_contest_election_enabled()) {
            return redirect()->home();
        }

        loggedUser()->isVotingOnFlagContest = true;

        loggedUser()->intendedRoute = 'flag-contest.vote.index';

        return $next($request);
    }
}
