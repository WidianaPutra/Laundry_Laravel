<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTPPageController extends Controller
{
    public function index()
    {
        if (!session('otp')) {
            return redirect('/auth/register');
        }
        return view('auth/otp');
    }
}
