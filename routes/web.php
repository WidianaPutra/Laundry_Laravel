<?php

use App\Http\Middleware\CheckRole;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\LoginController;
use App\Http\Controllers\View\RegisterController;
use App\Http\Controllers\View\LandingPageController;
use App\Http\Controllers\View\OTPPageController;

Route::get('/otp', function () {
  return view('auth/otp');
});

if (!CookieModel::CheckCookie()) {
  Route::get('/auth/login', [LoginController::class, 'index']);
  Route::get('/auth/register', [RegisterController::class, 'index']);
  Route::get('/auth/register/verify', [OTPPageController::class, 'index']);
}

Route::get('/', [LandingPageController::class, 'index']);

Route::middleware([CheckRole::class . ':admin'])->group(function () {
  //
});

Route::middleware([CheckRole::class . ':user'])->group(function () {
  //
});


// api
Route::prefix('/api')->group(function () {
  Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register']);
  Route::post('/register/otp', [App\Http\Controllers\RegisterController::class, 'verifyOTP']);
  Route::resource('/login', App\Http\Controllers\LoginController::class);
});

// dev mode
Route::get('/order', function () {
  return view('./users/order');
});

// Route::get('/sendOTP', function () {
//   Mail::to('olenggamer@gmail.com')->send(new OTPMail('test OTP'));
// });
