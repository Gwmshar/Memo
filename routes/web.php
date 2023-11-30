<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/register', [UserController::class, 'register'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register.create');
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.create');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');
Route::get('/terms', [UserController::class, 'terms'])->name('terms');
Route::get('/post/create', [PostController::class, 'index'])->name('post.create');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
