<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('about-us', [HomeController::class, 'about'])->name('about');

    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation_page');
    Route::post('reservation', [ReservationController::class, 'store']);

    Route::resource('profile', ProfileController::class);
    Route::resource('pets', PetController::class);
});

Route::prefix('admin')->middleware(['auth', isAdmin::class])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard'); // name digunakan untuk pemanggilan di controller dan view
    Route::resource('dokter', DoctorController::class); // get, post, patch, put, delete
    Route::resource('produk', ProductController::class);
    Route::resource('reservasi', AdminReservationController::class);

    Route::delete('delete-image-product/{id}', [ProductController::class, 'destroy_image'])->name('delete-image-product');
});

Auth::routes();
