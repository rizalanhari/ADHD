<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\loginController as ControllersLoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// user
Route::get('/', [userController::class, 'index']);
Route::get('/user/data', [userController::class, 'data']);
Route::get('/user/predict', [userController::class, 'predict']);
Route::post('/user/predict/post', [userController::class, 'storepredict']);
// admin
Route::get('/admin', [adminController::class, 'index'])->middleware('auth');
Route::get('/data', [adminController::class, 'data'])->middleware('auth');
Route::get('/predict', [adminController::class, 'predict'])->middleware('auth');
Route::post('/predict/post', [adminController::class, 'storepredict'])->middleware('auth');
// register
Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
//logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
