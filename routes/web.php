<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
//users
Route::get('/', [UserController::class, 'home']);
Route::get('/dang-nhap', [UserController::class, 'login']);
Route::get('/dang-ki', [UserController::class, 'register'])->name('register');
Route::post('/dang-ki', [UserController::class, 'create']);




//admin
Route::get('/dashboard', [AdminController::class, 'homeadmin']);
Route::post('/admin-home', [AdminController::class, 'login']);
Route::get('/admin-home', [AdminController::class, 'adminpage']);
Route::get('/hien-thi-thong-tin-bac-sy', [AdminController::class, 'hienthibacsy']);


