<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk dashboard user
Route::get('/user/dashboard', function () {
    return view('user.dashboard'); // Panggil view user.dashboard
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/data-diri', [App\Http\Controllers\ProfileController::class, 'updateDataDiri'])->name('profile.data-diri.update');
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('user.dashboard');

});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:admin');


    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit')->middleware('auth:admin');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update')->middleware('auth:admin');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy')->middleware('auth:admin');
});

require __DIR__.'/auth.php';