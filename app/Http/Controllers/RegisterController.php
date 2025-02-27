<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'password' => 'required|string|min:8',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15'
        ]);

        if (UsersModel::where('email', $request->input('email'))->exists()) {
            return redirect('/reg')->with('error', 'Email is already used');
        }

        $user = UsersModel::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number')
        ]);

        if (!$user) {
            return redirect('/reg')->with('error', 'Failed to register user.');
        }

        CookieModel::setUserCookie($user->id, $user->username, $user->email, $user->role);

        if (!CookieModel::CheckCookie()) {
            return redirect('/reg')->with('error', 'Please try again');
        }

        return redirect('/');
    }
}
