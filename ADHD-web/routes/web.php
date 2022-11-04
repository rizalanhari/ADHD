<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
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
Route::get('/admin', [adminController::class, 'index']);
Route::get('/data', [adminController::class, 'data']);
Route::get('/predict', [adminController::class, 'predict']);
Route::post('/predict/post', [adminController::class, 'storepredict']);
// login
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login/proses', 'proses');
    Route::get('/logout', 'logout');
});
