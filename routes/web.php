<?php

use App\Http\Middleware\CheckRole;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\User\DashboardViewController;
use App\Http\Controllers\View\OrderFormUserController;
use App\Http\Controllers\View\Auth\AuthViewController;
use App\Http\Controllers\View\Auth\ResetPasswordController;
use App\Http\Controllers\View\Auth\ForgetPasswordController;

// api
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardViewController::class, 'index']);
Route::get('/auth/{random_string}', [AuthViewController::class, 'index'])->name('auth_page');

Route::middleware([CheckRole::class . ':admin'])->group(function () {
});

// Route::middleware([CheckRole::class . ':user'])->group(function () {
Route::get('/order', [OrderFormUserController::class, 'index']);
Route::get('/resetPassword', [ResetPasswordController::class, 'index'])->name('resetPassword');
Route::get('/forgetPassword', [ForgetPasswordController::class, 'index'])->name('forgetPassword');
// });

// api
Route::prefix('/api')->group(function () {
  //auth
  Route::post('/verify/otp', [AuthController::class, 'verifyOTP'])->name('verify_otp');
  Route::post('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/resend-otp', [AuthController::class, 'generateOTP'])->name('resend-otp');
});

Route::get('/admin', function () {
  return view('admin.dashboard');
});

// dev
Route::get('/removeCookie', function () {
  CookieModel::removeUserCookie();
  return redirect('/');
});

Route::get('/checkCookie', function () {
  if (CookieModel::getCookie('user_id') && CookieModel::getCookie('role')) {
    var_dump([
      'username' => CookieModel::getCookie('username'),
      'role' => CookieModel::getCookie('role'),
      'email' => CookieModel::getCookie('email'),
      'user_id' => CookieModel::getCookie('user_id'),
    ]);
  }
  return;
});

Route::get('/showAuthURL', function () {
  var_dump([
    'login' => session('auth_url.login'),
    'register' => session('auth_url.register'),
    'otp' => session('auth_url.otp')
  ]);
});

Route::get('/showOTP', function () {
  var_dump(session('otp'));
});