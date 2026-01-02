<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('show.login');
    Route::get('/register', 'showRegister')->name('show.register');
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
});

Route::middleware('auth')->controller(NinjaController::class)->group(function () {
    Route::get('/ninjas', 'index')->name('ninjas.index');
    Route::get('/ninjas/create', 'create')->name('ninjas.create');
    Route::get('/ninjas/{ninja}', 'show')->name('ninjas.show');
    Route::post('/ninjas', 'store')->name('ninjas.store');
    Route::delete('/ninjas/{ninja}', 'destroy')->name('ninjas.destroy');
});
