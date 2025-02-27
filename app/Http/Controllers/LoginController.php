<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        $data = UsersModel::where('email', $request->input('email'))->first();

        if (!$data) {
            return redirect('/register')->with('error', 'Account Not Found');
        }

        if (!Hash::check($request->input('password'), $data->password)) {
            return redirect('/register')->with('error', 'Password not Match');
        }

        CookieModel::setUserCookie($data->user_id, $data->username, $data->email, $data->role);

        if (!CookieModel::CheckCookie()) {
            return redirect('/reg')->with('error', 'Please try again');
        }

        return redirect('/');
    }
}
