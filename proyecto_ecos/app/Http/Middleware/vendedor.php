<?php

namespace App\Http\Middleware;

use Closure;

class vendedor
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
        if (\Auth::user()->rol_id!=2) {
            return redirect('/login');
        }

        return $next($request);
    }
}
