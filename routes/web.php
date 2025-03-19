<?php

use App\Http\Middleware\CheckRole;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\User\DashboardViewController;
use App\Http\Controllers\View\User\OrderFormView;
use App\Http\Controllers\View\Auth\AuthViewController;
use App\Http\Controllers\View\Auth\UpdatePasswordController;
use App\Http\Controllers\View\Auth\ForgetPasswordController;

// api
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardViewController::class, 'index']);
Route::get('/auth/{random_string}', [AuthViewController::class, 'index'])->name('auth_page');

Route::middleware([CheckRole::class . ':admin'])->group(function () {
});

Route::middleware([CheckRole::class . ':user'])->group(function () {
  Route::get('/order', [OrderFormView::class, 'index']);
  Route::get('/resetPassword', [UpdatePasswordController::class, 'index'])->name('resetPassword');
  Route::get('/forgetPassword', [ForgetPasswordController::class, 'index'])->name('forgetPassword');
});


// api
Route::prefix('/api')->group(function () {
  //auth
  Route::post('/verify/otp', [AuthController::class, 'verifyOTP'])->name('verify_otp');
  Route::post('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/login', [AuthController::class, 'login'])->name('login');
  Route::get('/resend-otp', [AuthController::class, 'resendOTP'])->name('resend-otp');
  Route::post('/forget-password', [AuthController::class, 'forgetPassword'])->name('api/forget-password');
});











// dev
Route::get('/removeCookie', function () {
  CookieModel::removeUserCookie();
  return redirect('/');
});

Route::get('/checkCookie', function () {
  var_dump([
    'username' => CookieModel::getCookie('username'),
    'role' => CookieModel::getCookie('role'),
    'email' => CookieModel::getCookie('email'),
    'user_id' => CookieModel::getCookie('user_id'),
  ]);
});

Route::get('/showAuthURL', function () {
  var_dump(session('auth_url'));
});

Route::get('/showOTP', function () {
  var_dump(session('otp'));
});

Route::get('/userCookie/{role?}', function ($role = 'user') {
  CookieModel::setUserCookie('1', 'developer', 'developer@gamil.com', $role);
  return redirect('/');
});

Route::get('/custom', function ($role = 'user') {
  session()->forget('user_data');
  return redirect('/');
});


