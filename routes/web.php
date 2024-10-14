<?php

use App\Http\Controllers\WEB\Auth\LoginController;
use App\Http\Controllers\WEB\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('login/')->group(function () {
    Route::get('index.html', [LoginController::class, 'index'])->name('login');
    Route::post('create.html', [LoginController::class, 'create'])->name('login.create');
});

Route::prefix('register/')->group(function () {
    Route::get('index.html', [RegisterController::class, 'index'])->name('register');
    Route::post('create.html', [RegisterController::class, 'create'])->name('register.create');
});
