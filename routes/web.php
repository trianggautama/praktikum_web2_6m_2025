<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::post('/',[AuthController::class,'loginPost'])->name('login.post');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');