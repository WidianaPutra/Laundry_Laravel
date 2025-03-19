<?php

namespace App\Http\Controllers\View\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderFormView extends Controller
{
    public function index()
    {
        return view('users.order');
    }
}
