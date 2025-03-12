<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderFormUserController extends Controller
{
    public function index()
    {
        return view('users.order');
    }
}
