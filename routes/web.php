<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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



//view all products
Route::get('/', [ProductController::class, 'all']);

//add a product form
Route::get('/product/create', [ProductController::class, 'create'])->middleware('auth');

// Store product Data
Route::post('/product', [ProductController::class, 'store'])->middleware('auth');

//Edit product
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

// Update job listing
Route::put('/product/{product}', [ProductController::class, 'update'])->middleware('auth');

// Delete job
Route::delete('/product/{product}', [ProductController::class, 'delete'])->middleware('auth');

//single product
Route::get('/product/{product}', [ProductController::class, 'show']);

// registration form
Route::get('/register', [UserController::class, 'register'])->Middleware('guest');

// create user
Route::post('/user', [UserController::class, 'store']);

//login form
Route::get('/login', [UserController::class, 'login'])->name('login')->Middleware('guest');

//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//login
Route::post('/user/auth', [UserController::class, 'loginauth']);