<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::post('/obat', [HomeController::class, 'store'])->middleware('auth');
Route::put('/obat/{obat}', [HomeController::class, 'update'])->middleware('auth');
Route::delete('/obat/{obat}', [HomeController::class, 'destroy'])->middleware('auth');

Route::get('/profil', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/profil/{user}', [ProfileController::class, 'update'])->middleware('auth');
