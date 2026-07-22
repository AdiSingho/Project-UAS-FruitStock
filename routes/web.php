<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GudangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman awal
Route::get('/', function () {
    return redirect('/login');
});

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Manajemen User (Hanya bisa diakses oleh Admin yang sudah login)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/tambah-staf', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/tambah-staf', [UserController::class, 'store'])->name('admin.users.store');
});

// Gudang & Stok (Ditambahkan agar halaman gudang.blade.php bisa diakses)
Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');