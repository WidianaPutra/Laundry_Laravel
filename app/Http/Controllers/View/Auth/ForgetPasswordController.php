<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forgetPassword.forget_password_request');
    }
}
