<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DashboardController;

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


Route::middleware(['guest:karyawan'])->group(function(){
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/processlogin', [AuthController::class, 'processlogin']);
});

Route::middleware(['auth:karyawan'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/processlogout', [AuthController::class, 'processlogout']);

    // Presensi
    Route::get('/presensi/create', [PresensiController::class, 'create']);
    Route::post('/presensi/store', [PresensiController::class, 'store']);
});
