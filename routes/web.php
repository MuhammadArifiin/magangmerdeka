<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registerController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', [homeController::class, 'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function () {

        Route::get('/register', [registerController::class, 'show'])->name('register.show');
        Route::post('/register', [registerController::class, 'register'])->name('register.perform');

        Route::get('/login', [loginController::class, 'show'])->name('login.show');
        Route::post('/login', [loginController::class, 'login'])->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', [logoutController::class, 'perform'])->name('logout.perform');
    });
});
