<?php

namespace App\Http\Middleware;

use Closure;

class UserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        //if (!\Auth::check() || \Auth::user()->role != \App\User::ADMIN) {
        if (!\Auth::check() || \Auth::user()->role != $role) {
            abort (403);
        }
        return $next($request);
    }
}
