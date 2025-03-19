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
            return view('auth.login', ['rndm_url' => $randomString, 'forget_password' => '/auth/' . session('auth_url.forget_password')]);
        }

        if (session('auth_url.register') == $randomString) {
            $this->auth_options = '/auth/register';
            session(['auth_page' => 'register']);
            return view('auth.register', ['rndm_url' => $randomString]);
        }

        if (session('auth_url.otp') == $randomString && session('user_data') && session('otp')) {
            $url = '/auth/' . session('auth_url.' . session('auth_page'));
            return view('auth.otp', ['rndm_url' => $randomString, 'auth_options' => $this->auth_options, 'backUrl' => '/auth/' . session('auth_url.' . session('auth_page'))]);
        }

        if (session('auth_url.forget_password') == $randomString) {
            session(['auth_page' => 'forget_password']);
            if (session()->has('user_data')) {
                $expire_time = session('user_data.expire_time');
                if (now()->lessThan($expire_time)) {
                    return redirect('/auth', session('auth_url.forget_password'))->with('error', 'Session was expire');
                }
                return view('auth.forgetPassword.new_password');
            }
            return view('auth.forgetPassword.forget_password_request');
        }
        if (session('auth.update_password') == $randomString) {
            // 
        } else {
            return view('errors.404');
        }
    }
}

