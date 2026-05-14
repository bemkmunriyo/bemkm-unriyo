<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * HALAMAN LOGIN
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * PROSES LOGIN
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        /*
        |--------------------------------------------------------------------------
        | LOGIN
        |--------------------------------------------------------------------------
        */

        $request->authenticate();

        /*
        |--------------------------------------------------------------------------
        | REGENERATE SESSION
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | USER LOGIN
        |--------------------------------------------------------------------------
        */

        $user = auth()->user();

        /*
        |--------------------------------------------------------------------------
        | SUPER ADMIN
        |--------------------------------------------------------------------------
        */

        if ($user->role == 'super_admin') {

            return redirect()->route('superadmin.dashboard');

        }

        /*
        |--------------------------------------------------------------------------
        | BEM KM
        |--------------------------------------------------------------------------
        */

        if ($user->role == 'bemkm') {

            return redirect()->route('bemkm.dashboard');

        }

        /*
        |--------------------------------------------------------------------------
        | DPM KM
        |--------------------------------------------------------------------------
        */

        if ($user->role == 'dpm') {
    return redirect('/dpmkm/dashboard');
}

        /*
        |--------------------------------------------------------------------------
        | ORMAWA & UKM
        |--------------------------------------------------------------------------
        */

        if (
            $user->role == 'ormawa' ||
            $user->role == 'ukm'
        ) {

            return redirect()->route('ormawaukm.dashboard');

        }

        /*
        |--------------------------------------------------------------------------
        | DEFAULT
        |--------------------------------------------------------------------------
        */

        return redirect('/');
    }

    /**
     * LOGOUT
     */
    public function destroy(Request $request): RedirectResponse
    {
        /*
        |--------------------------------------------------------------------------
        | LOGOUT USER
        |--------------------------------------------------------------------------
        */

        Auth::guard('web')->logout();

        /*
        |--------------------------------------------------------------------------
        | INVALIDATE SESSION
        |--------------------------------------------------------------------------
        */

        $request->session()->invalidate();

        /*
        |--------------------------------------------------------------------------
        | REGENERATE TOKEN
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerateToken();

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect('/');
    }
}