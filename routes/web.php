<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\LoginController;
use App\Http\Controllers\View\RegisterController;
use App\Http\Controllers\View\LandingPageController;

// controller Api
use App\Http\Controllers\UserController;

// 
if (!CookieModel::CheckCookie()) {
  Route::get('/', [LoginController::class, 'index']);
  Route::get('/register', [RegisterController::class, 'index']);
}

Route::get('/landingpage', [LandingPageController::class, 'index']);

Route::middleware([CheckRole::class . ':admin'])->group(function () {
  //
});

// api
Route::prefix('/api')->group(function () {
  Route::resource('/user/{email?}', UserController::class);
});