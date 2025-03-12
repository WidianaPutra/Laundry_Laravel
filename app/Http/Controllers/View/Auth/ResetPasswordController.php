<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.resetPassword.reset_password');
    }
}
