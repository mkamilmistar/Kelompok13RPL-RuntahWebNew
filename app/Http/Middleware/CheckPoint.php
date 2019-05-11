<?php

namespace App\Http\Middleware;

use Closure;

class CheckPoint
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
        if ($request->user()->point <= 200) {
            return redirect('/profile');
        }
        return $next($request);
    }
}