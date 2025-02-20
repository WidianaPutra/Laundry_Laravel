<?php

use Illuminate\Support\Facades\Route;

// controller View
use App\Http\Controllers\View\LoginController;
use App\Http\Controllers\View\RegisterController;

// controller Api
use App\Http\Controllers\UserController;

// 
Route::get('/', [LoginController::class, 'index']);
Route::get('/reg', [RegisterController::class, 'index']);

// api
Route::prefix('/api')->group(function () {
  Route::resource('/user/{email?}', UserController::class);
});