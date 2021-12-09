<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrustedLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
            return redirect()->route('login');

        if (Auth::user()->hasRole("Client") || Auth::user()->hasRole('Administrateur'))
            return $next($request);

        abort(403);
    }
}
