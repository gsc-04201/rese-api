<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\ReservationsController;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', [RegisterController::class, 'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::get('/user', [UsersController::class, 'get']);
Route::put('/user', [UsersController::class, 'put']);
Route::post('/logout', [LogoutController::class, 'post']);


Route::apiResource('/area', AreasController::class);
Route::apiResource('/genre', GenresController::class);
Route::apiResource('/store', StoresController::class);
Route::apiResource('/reservation', ReservationsController::class);
Route::apiResource('/like', LikesController::class);