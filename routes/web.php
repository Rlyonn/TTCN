<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachHangController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('khach_hangs', KhachHangController::class);
});

Route::get('/', function () {
    return view('index');
});