<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login'])->name('login.post');
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register/create', [SesiController::class, 'registerCreate'])->name('register.create');
});

Route::middleware(['userAkses:admin', 'auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('product', ProductController::class);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logoutAdmin');
});

Route::middleware(['userAkses:user', 'auth'])->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    Route::resource('transaction', TransactionController::class);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logoutUser');
    
});
