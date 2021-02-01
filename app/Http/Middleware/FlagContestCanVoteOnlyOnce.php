<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\StudentAlreadyVotedOnFlag;

class FlagContestCanVoteOnlyOnce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws StudentAlreadyVotedOnFlag
     */
    public function handle($request, Closure $next)
    {
        if (loggedUser()->student->votedInCurrentFlagContest()) {
            throw new StudentAlreadyVotedOnFlag(
                loggedUser()->student->registration
            );
        }

        return $next($request);
    }
}
