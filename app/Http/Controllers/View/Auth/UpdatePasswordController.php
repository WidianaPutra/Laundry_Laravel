<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function index()
    {
        return view('auth.updatePassword.update_password');
    }
}
