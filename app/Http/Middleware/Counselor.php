<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Counselor
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
        if ($request->user()->authority != 'counselor') {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                abort(403);
            }
        }

        return $next($request);
    }
}
