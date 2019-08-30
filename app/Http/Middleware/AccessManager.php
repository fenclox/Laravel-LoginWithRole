<?php

namespace App\Http\Middleware;

use Closure;
//memanggil auth
use Auth;

class AccessManager
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
        if(Auth::user()->hasAnyRole('manager')) {
            return $next($request);
        }
        return redirect('home');
    }
}
