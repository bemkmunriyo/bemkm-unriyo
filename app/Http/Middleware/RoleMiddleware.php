<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(
        Request $request,
        Closure $next,
        ...$roles
    ): Response
    {
        /*
        |--------------------------------------------------------------------------
        | CEK LOGIN
        |--------------------------------------------------------------------------
        */

        if (!Auth::check()) {

            return redirect('/login');

        }

        /*
        |--------------------------------------------------------------------------
        | CEK ROLE
        |--------------------------------------------------------------------------
        */

        if (!in_array(Auth::user()->role, $roles)) {

            abort(403);

        }

        /*
        |--------------------------------------------------------------------------
        | LANJUTKAN REQUEST
        |--------------------------------------------------------------------------
        */

        return $next($request);
    }
}