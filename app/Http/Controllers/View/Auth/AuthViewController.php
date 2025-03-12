<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use App\Models\CookieModel;
use Illuminate\Http\Request;
use ILluminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthViewController extends Controller
{
    public $auth_options;
    public function index($randomString)
    {
        if (CookieModel::CheckCookie()) {
            return redirect('/');
        }
        if (session('auth_url.login') == $randomString) {
            $this->auth_options = '/auth/login';
            session(['auth_page' => 'login']);
            return view('auth.login', ['rndm_url' => $randomString]);
        }
        if (session('auth_url.register') == $randomString) {
            $this->auth_options = '/auth/register';
            session(['auth_page' => 'register']);
            return view('auth.register', ['rndm_url' => $randomString]);
        }
        if (session('auth_url.otp') == $randomString && session('user_data') && session('otp')) {
            return view('auth.otp', ['rndm_url' => $randomString, 'auth_options' => $this->auth_options]);
        } else {
            return view('errors.404');
        }
    }
}
