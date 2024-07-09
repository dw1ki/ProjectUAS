<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $levels): Response
    {
        // return $next($levels);
        if ($request->user()->role == $levels) {
            return $next($request);
        } else {
            if (auth()->user()->role == 'admin') {
                return redirect('/cms');
            } elseif (auth()->user()->role == 'user') {
                return redirect('/cms/pengguna');
            }
        }
    }
}
