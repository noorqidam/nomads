<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/verification', HomeController::class, 'verification')
    ->name('home-verification');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
    ->name('detail');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/checkout/{id}', [CheckoutController::class, 'process'])
        ->name('checkout_process');

    Route::get('/checkout/{id}', [CheckoutController::class, 'index'])
        ->name('checkout');

    Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])
        ->name('checkout-create');

    Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])
        ->name('checkout-remove');

    Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])
        ->name('checkout-success');
});

// Route::get('/checkout/success', [CheckoutController::class, 'success'])
//     ->name('checkout-success');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });

Auth::routes(['verify' => true]);
