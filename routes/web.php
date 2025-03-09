<?php

use App\Http\Middleware\CheckRole;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\LandingPageController;
use App\Http\Controllers\View\DashboardAdminController;
use App\Http\Controllers\View\OrderFormUserController;

if (!CookieModel::CheckCookie()) {
  Route::get('/auth/{random_string}', [App\Http\Controllers\View\AuthController::class, 'index'])->name('auth_page');
}

Route::get('/', [LandingPageController::class, 'index']);

Route::middleware([CheckRole::class . ':admin'])->group(function () {
  // Route::get('/', [DashboardAdminController::class, 'index']);
});

Route::middleware([CheckRole::class . ':user'])->group(function () {
  Route::get('/order', [OrderFormUserController::class, 'index']);
});


// api
Route::prefix('/api')->group(function () {
  Route::post('/verify/otp', [App\Http\Controllers\RegisterController::class, 'verifyOTP']);
  Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
  Route::post('/login', [App\Http\Controllers\LoginController::class, 'Login'])->name('login');
});
