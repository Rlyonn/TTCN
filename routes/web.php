<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiDichVuController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\CthdController;
use App\Http\Controllers\VeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthManagerController;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('adminIndex');
    Route::resource('khach_hangs', KhachHangController::class);
    Route::resource('loai_dich_vus', LoaiDichVuController::class);
    Route::resource('dich_vus', DichVuController::class);
    Route::resource('hoa_dons', HoaDonController::class);
    Route::resource('cthds', CthdController::class);
    Route::resource('ves', VeController::class);
});


Route::get('/', [DichVuController::class, 'homeIndex'])->name('index');
Route::get('/show/{maDV}', [DichVuController::class, 'showForCustomer'])->name('show');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('register', [AuthManagerController::class, 'showRegistration'])->name('show-registration');
Route::post('register', [AuthManagerController::class, 'register'])->name('register');
Route::get('login', [AuthManagerController::class, 'showLogin'])->name('show-login');
Route::post('login', [AuthManagerController::class, 'login'])->name('login');

Route::middleware('checkLogin')->group(function(){
    Route::get('logout', [AuthManagerController::class, 'logout'])->name('logout');
});