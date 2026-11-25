
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusinessController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');
});

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/business/create', [BusinessController::class, 'create'])
        ->name('business.create');

    Route::post('/business', [BusinessController::class, 'store'])
        ->name('business.store');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Delete authenticated user's account
    Route::delete('/account', [AuthController::class, 'destroy'])
        ->name('account.destroy');
});
