<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class RandomStringMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Session::put('a', Session::has('auth_url'));
        if (!Session::has('auth_url')) {
            Session::put('auth_url', [
                'login' => Str::random(50),
                'register' => Str::random(55),
                'otp' => Str::random(80),
            ]);
        }
        Session::save();
        return $next($request);
    }
}
