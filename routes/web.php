<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use App\Models\CookieModel;

// controller View
use App\Http\Controllers\View\LoginController;
use App\Http\Controllers\View\RegisterController;
use App\Http\Controllers\View\LandingPageController;


if (!CookieModel::CheckCookie()) {
  Route::get('/', [LoginController::class, 'index']);
  Route::get('/register', [RegisterController::class, 'index']);
}

Route::get('/landingpage', [LandingPageController::class, 'index']);

Route::middleware([CheckRole::class . ':admin'])->group(function () {
  //
});

Route::middleware([CheckRole::class . ':user'])->group(function () {
  //
});

// api
Route::prefix('/api')->group(function () {
  Route::resource('/register', App\Http\Controllers\RegisterController::class);
  Route::resource('/login', App\Http\Controllers\LoginController::class);
});