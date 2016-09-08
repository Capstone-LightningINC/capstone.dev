<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Student
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
        if ($request->user()->authority != 'student') {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                abort(403);
            }
        }

        return $next($request);
    }
}