<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private $authURL;
    public $userData;
    private $auth_page;

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

    public function login(Request $request)
    {
        $this->authURL = session('auth_url');

        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        $data = UsersModel::where('email', '=', $request->input('email'))->get();
        $this->userData = $data;

        if (count($data) === 0) {
            return redirect('/auth/' . $this->authURL['login'])->with('error', 'Account Not Found');
        }
        $this->userData = $data[0];

        if (!Hash::check($request->input('password'), $this->userData['password'])) {
            return redirect('/auth/' . $this->authURL['login'])->with('error', 'Password does not match');
        }

        session([
            'user_data' => [
                'id' => $this->userData['id'],
                'email' => $this->userData['email'],
                'username' => $this->userData['username'],
                'role' => $this->userData['role']
            ]
        ]);

        $this->generateOTP();
        $otpURL = session('auth_url.otp');
        return redirect("/auth/$otpURL");
    }

    public function forgetPassword(Request $request)
    {
        // user sudah memasukan email
        if (session()->has('user_data')) {
            if (strlen($request->input('new-password')) < 7) {
                return redirect('/auth/' . session('auth_url.forget_password'))->with('error', 'Password must be more then 7 characters long');
            }

            $request->validate([
                'new-password' => 'required|string|min:8',
                'confirm-password' => 'required|string|min:8',
            ]);

            if ($request->input('new-password') !== $request->input('confirm-password')) {
                return redirect('/auth/' . session('auth_url.forget_password'))->with('error', 'Password dan Confirm password does not match');
            }

            UsersModel::where('email', '=', session('user_data.email'))->update([
                'password' => $request->input('password')
            ]);

            session()->forget('user_data');
            return redirect('/');
        }

        // user belum memasukan email
        $request->validate(['email' => 'required|string|email']);

        $data = UsersModel::where('email', '=', $request->input('email'))->first();

        if ($data == null) {
            return redirect('/auth/' . session('auth_url.forget_password'))->with('error', 'Email not found');
        }

        session([
            'user_data' => [
                'email' => $request->input('email'),
                'expire_time' => now()->addMinutes(5)
            ]
        ]);

        $this->generateOTP();
        return redirect("/auth/" . session("auth_url.otp"));
    }
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        $this->authURL = session('auth_url');
        $this->auth_page = session('auth_page');

        if (!session()->has('otp')) {
            return redirect('/auth/' . $this->authURL[$this->auth_page])->with('error', 'OTP code was expire');
        }

        if (now()->greaterThan(session('otp.otp_time'))) {
            session()->forget(['otp', 'user_data']);
            return redirect('/auth/' . $this->authURL[$this->auth_page])->with('error', 'OTP code was expire');
        }

        if ((int) $request->input('otp') !== session('otp.code')) {
            return redirect('/auth/' . $this->authURL['otp'])->with('error', "OTP code doesn't match");
        }

        // page
        if ($this->auth_page == 'register') {
            UsersModel::create(session('user_data'));
            $user = UsersModel::where('email', '=', session('user_data.email'))->first();
            CookieModel::setUserCookie($user->id, $user->username, $user->email, $user->role);
        }
        if ($this->auth_page == 'login') {
            CookieModel::setUserCookie(
                session('user_data.id'),
                session('user_data.email'),
                session('user_data.username'),
                session('user_data.role')
            );
        }
        if ($this->auth_page == "forget_password") {
            return redirect('/auth/' . session('auth_url.forget_password'));
        }

        session()->forget(['otp', 'user_data']);
        return redirect('/');
    }

    public function resendOTP()
    {
        $this->generateOTP();
        return redirect('/auth/' . session('auth_url.otp'));
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
