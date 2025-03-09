<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public $authURL;
    public function register(Request $request)
    {
        $this->authURL = session('auth_url');

        if (strlen($request->input('password')) < 8) {
            return redirect('/auth/' . $this->authURL['register'])->with('error', 'Password must be more then 7 characters long');
        }

        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:15'
        ]);

        if (UsersModel::where('email', $request->input('email'))->exists()) {
            return redirect('/auth/' . $this->authURL['register'])->with('error', 'Email is already used');
        }

        if (UsersModel::where('phone_number', $request->input('phone_number'))->exists()) {
            return redirect('/auth/' . $this->authURL['register'])->with('error', 'Phone number is already used');
        }

        session([
            'user_data' => [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phone_number')
            ]
        ]);

        $this->generateOTP();
        return redirect("/auth/" . $this->authURL['otp']);
    }
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        if (!session()->has('otp')) {
            return redirect('/auth/' . $this->authURL['register'])->with('error', 'OTP code was expire');
        }

        if (now()->greaterThan(session('otp.otp_time'))) {
            session()->forget(['otp', 'user_data']);
            return redirect('/auth/' . $this->authURL['register'])->with('error', 'OTP code was expire');
        }

        if ((int) $request->input('otp') !== session('otp.code')) {
            return redirect('/auth/' . $this->authURL['otp'])->with('error', "OTP code doesn't match");
        }
        // $user = UsersModel::create(session('user_data'));
        // CookieModel::setUserCookie($user->id, $user->username, $user->email, $user->role);
        session()->forget(['otp', 'user_data']);
        return redirect('/');
    }

    public function generateOTP()
    {
        $generateOTP = rand(100000, 999999);
        session([
            "otp" => [
                'code' => $generateOTP,
                'otp_time' => now()->addMinutes(5)
            ]
        ]);
        Mail::to(session('user_data.email'))->send(new OTPMail($generateOTP, session('user_data.username')));
    }
}
