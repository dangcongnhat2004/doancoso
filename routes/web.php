<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetPasswordController;

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
    Route::post('/dang-xuat', [UserController::class, 'logout'])->name('logout');
    Route::get('/dang-nhap', [UserController::class, 'loginuser']);
    Route::get('/quen-mat-khau', [UserController::class, 'forget']);
    Route::get('/user-home', [UserController::class, 'homepage']);
    Route::post('/user-home', [UserController::class, 'login']);
    Route::get('/dang-ki', [UserController::class, 'register'])->name('register');
    Route::post('/dang-ki', [UserController::class, 'create']);
    Route::get('/user-hien-thi-bac-si', [UserController::class, 'hienthibacsi']);
    Route::get('/user-dat-lich', [UserController::class, 'hienthilich']);
    Route::get('/user-tin-tuc', [UserController::class, 'scrapeData']);
    Route::get('/user-bai-viet-chi-tiet/{id}', [UserController::class, 'showDetail']);
    Route::get('/user-bai-viet-chi', [UserController::class, 'showDetail1']);

    Route::post('/user-dat-lich', [UserController::class, 'datlich']);
    Route::get('/user-cuoc-hen', [UserController::class, 'cuochen']);
    Route::get('/user-hien-thi-thuoc', [UserController::class, 'hienthithuoc']);

    Route::get('/reset-password', [ResetPasswordController::class, 'showForm']);
    Route::post('/reset-password', [ResetPasswordController::class, 'sendResetLink'])->name('send.reset.link');


     Route::get('/update-data', [UserController::class, 'updateData'])->name('updateData');


//admin
Route::get('/dashboard', [AdminController::class, 'homeadmin']);
//Route::post('/dashboard', [AdminController::class, 'logout'])->name('logout');
Route::post('/dashboard', [AdminController::class, 'logout'])->name('logout');


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
Route::get('/trang-chu-bac-si', [DoctorController::class, 'trangchu']);
Route::post('/dang-xuat-bac-si', [DoctorController::class, 'logout'])->name('logout');

Route::post('/doctor-home', [DoctorController::class, 'login']);
Route::get('/bac-si-lich-trinh', [DoctorController::class, 'lichtrinh']);
// Route::post('/logout', [DoctorController::class, 'logout']);
// Route::get('/doctor-hien-thi-thong-tin-bac-sy', [DoctorController::class, 'hienthibacsi']);
Route::get('/bac-si-cap-nhat-thong-tin', [DoctorController::class, 'hienthithongtin']);
Route::get('/bac-si-hien-thi-nguoi-benh', [DoctorController::class, 'hienthinguoibenh']);

Route::post('/bac-si-cap-nhat-thong-tin', [DoctorController::class, 'capnhatthongtin']);


//test
Route::get('/testadmin', [UserController::class, 'test']);

