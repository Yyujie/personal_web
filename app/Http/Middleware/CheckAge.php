<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        //只有成年人才能访问
        if ($request->age < 18) {
            return redirect()->route('child');
        }
        return $next($request);
    }

}
