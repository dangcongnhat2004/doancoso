<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
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
    // Các route khác

    Route::get('/', [UserController::class, 'home']);
    Route::post('/dang-xuat', [UserController::class, 'logout'])->name('logout');
    Route::get('/dang-nhap', [UserController::class, 'loginuser']);
    Route::get('/user-home', [UserController::class, 'homepage']);
    Route::post('/user-home', [UserController::class, 'login']);
    Route::get('/dang-ki', [UserController::class, 'register'])->name('register');
    Route::post('/dang-ki', [UserController::class, 'create']);
    Route::get('/user-hien-thi-bac-si', [UserController::class, 'hienthibacsi'])->name('user-hien-thi-bac-si');
    Route::get('/user-dat-lich', [UserController::class, 'hienthilich']);
    Route::post('/user-dat-lich', [UserController::class, 'datlich']);
    Route::get('/user-cuoc-hen', [UserController::class, 'cuochen']);


//admin
Route::get('/dashboard', [AdminController::class, 'homeadmin']);
//Route::post('/dashboard', [AdminController::class, 'logout'])->name('logout');


Route::post('/admin-home', [AdminController::class, 'login']);
Route::get('/admin-home', [AdminController::class, 'adminpage']);
Route::get('/trang-chu-admin', [AdminController::class, 'adminhome']);

Route::get('/hien-thi-thong-tin-bac-sy', [AdminController::class, 'hienthibacsi']);
// Route::post('/logout', [AdminController::class, 'logout']);
Route::get('/lich-trinh', [AdminController::class, 'lichtrinh']);
Route::get('/hien-thi-benh-nhan', [AdminController::class, 'hienthibenhnhan']);
Route::get('/them-bai-viet', [AdminController::class, 'thembai']);
Route::post('/them-bai-viet', [AdminController::class, 'thembaiviet']);
Route::get('/hien-thi-thuoc', [AdminController::class, 'hienthithuoc']);
//themtaikhoanbacsi
Route::get('/them-tai-khoan-bac-si', [AdminController::class, 'taikhoanbacsi']);
Route::post('/them-tai-khoan-bac-si', [AdminController::class, 'thembacsi']);


//doctor
Route::get('/doctor-home', [DoctorController::class, 'index']);
Route::post('/doctor-home', [DoctorController::class, 'login']);
Route::get('/doctor-lich-trinh', [DoctorController::class, 'lichtrinh']);
// Route::post('/logout', [DoctorController::class, 'logout']);
// Route::get('/doctor-hien-thi-thong-tin-bac-sy', [DoctorController::class, 'hienthibacsi']);
Route::get('/doctor-cap-nhat-thong-tin', [DoctorController::class, 'hienthithongtin']);
Route::post('/doctor-cap-nhat-thong-tin', [DoctorController::class, 'capnhatthongtin']);


