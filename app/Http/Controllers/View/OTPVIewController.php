<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTPVIewController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.otp', ['method' => $request->query('method', 'login')]);
    }
}
