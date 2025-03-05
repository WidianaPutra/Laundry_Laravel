<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register(Request $request)
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

        $generateOTP = rand(100000, 999999);

        session([
            'register_data' => [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phone_number')
            ],
            "otp" => [
                'code' => $generateOTP,
                'otp_time' => now()->addMinutes(5)
            ]
        ]);

        $username = session('register_data.username');

        Mail::to($request->input('email'))->send(new OTPMail($generateOTP, $username));

        // $user = UsersModel::create([
        //     'username' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make($request->input('password')),
        //     'address' => $request->input('address'),
        //     'phone_number' => $request->input('phone_number')
        // ]);

        // if (!$user) {
        //     return redirect('/reg')->with('error', 'Failed to register user.');
        // }

        // CookieModel::setUserCookie($user->id, $user->username, $user->email, $user->role);

        // if (!CookieModel::CheckCookie()) {
        //     return redirect('/reg')->with('error', 'Please try again');
        // }

        // return redirect('/');
    }
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => $request->input('otp')
        ]);

        if (!session()->has('otp.code') || !session()->has('otp.otp_time')) {
            return redirect('/auth/register')->with('error', 'OTP code was expire');
        }

        if (now()->greaterThan(session('otp.otp_time'))) {
            session()->forget(['otp', 'register_data']);
            return redirect('/auth/register')->with('error', 'OTP code was expire');
            
        }

        if ($request->input('otp') !== session('otp.code')) {
            return redirect('/auth/register/verify')->with('error', "OTP code doesn't match");
        }
        $user = UsersModel::create([session('register_data')]);
        CookieModel::setUserCookie($user->id, $user->username, $user->email, $user->role);
        return redirect('/');
    }
}
