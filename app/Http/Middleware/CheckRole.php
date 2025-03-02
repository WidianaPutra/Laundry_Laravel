<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\CookieModel;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {
        $userRole = CookieModel::getCookie('role');
        $allowedRoles = explode(',', $roles); // Konversi string ke array

        if (!in_array($userRole, $allowedRoles)) {
            return redirect('/')->with('err', 'Unauthorized'); // Bisa diganti dengan abort(403);
        }

        return $next($request);
    }
}
