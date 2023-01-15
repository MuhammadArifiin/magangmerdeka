<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\studentController;
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

    Route::get('/mahasiswa', [studentController::class, 'index'])->name('student.index');

    Route::get('/mahasiswa/tambah', [studentController::class, 'create'])->name('student.create');
    Route::get('/mahasiswa/detail/{id}', [studentController::class, 'show']);
    Route::post('/mahasiswa', [studentController::class, 'store'])->name('student.store');
    Route::get('/mahasiswa/{id}', [studentController::class, 'edit']);
    Route::put('/mahasiswa/{id}', [studentController::class, 'update']);
    Route::delete('/mahasiswa/{id}', [studentController::class, 'destroy']);

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
