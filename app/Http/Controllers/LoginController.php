<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    private $userData;

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        $data = UsersModel::where('email', $request->input('email'))->first();
        $this->userData = $data;

        if (!$data) {
            return redirect('/auth/login')->with('error', 'Account Not Found');
        }

        if (!Hash::check($request->input('password'), $data->password)) {
            return redirect('/auth/login')->with('error', 'Password does not match');
        }

        session([
            'user_data' => [
                'email' => $data->email,
                'username' => $data->username
            ]
        ]);

        $this->generateOTP();
        $otpURL = session('auth_url.otp');
        return redirect("/auth/$otpURL");
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        if (!session()->has('otp')) {
            return redirect('/auth/register')->with('error', 'OTP code was expired');
        }

        if (now()->greaterThan(session('otp.otp_time'))) {
            session()->forget(['otp', 'user_data']);
            return redirect('/auth/register')->with('error', 'OTP code was expired');
        }

        if ((string) $request->input('otp') !== (string) session('otp.code')) {
            return redirect('/auth/register/verify')->with('error', "OTP code doesn't match");
        }

        CookieModel::setUserCookie(
            $this->userData->id,
            $this->userData->username,
            $this->userData->email,
            $this->userData->role
        );

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
