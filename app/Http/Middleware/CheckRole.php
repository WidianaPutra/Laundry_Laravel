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
        $allowedRoles = explode(',', $roles);

        if (!in_array($userRole, $allowedRoles)) {
            if (!CookieModel::CheckCookie() && $roles === 'user') {
                return redirect('/')->with('err', 'Unauthorized');
            }
            return redirect('/')->with('err', 'Unauthorized');
        }
        return $next($request);
    }
}
