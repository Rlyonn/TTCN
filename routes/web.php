<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiDichVuController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\HoaDonController;



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('khach_hangs', KhachHangController::class);
    Route::resource('loai_dich_vus', LoaiDichVuController::class);
    Route::resource('dich_vus', DichVuController::class);
    Route::resource('hoa_dons', HoaDonController::class);
});

Route::get('/', function () {
    return view('index');
});