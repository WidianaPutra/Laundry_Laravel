<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index($random_string = 'a')
    {
        return view('auth.register', ['da' => $random_string]);
    }
}
