<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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
Route::get('/profile/edit/{id}',[HomeController::class,'profileEdit'])->name('profile.edit');
Route::put('/profile/edit/{id}',[HomeController::class,'profileUpdate'])->name('profile.update');

// route data postingan
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::get('/post/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('/post/{id}',[PostController::class,'update'])->name('post.update');
Route::delete('/post/{id}/delete',[PostController::class,'delete'])->name('post.delete');

