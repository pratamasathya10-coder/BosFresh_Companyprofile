<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Bali Organik Subak'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About — Bali Organik Subak'
    ]);
});

Route::get('/products', function () {
    return view('products', [
        'title' => 'Products — Bali Organik Subak'
    ]);
});

Route::get('/process', function () {
    return view('process', [
        'title' => 'Process — Bali Organik Subak'
    ]);
});

Route::get('/sustainability', function () {
    return view('sustainability', [
        'title' => 'Sustainability — Bali Organik Subak'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact — Bali Organik Subak'
    ]);
});


/*
|--------------------------------------------------------------------------
| Authentication UI
|--------------------------------------------------------------------------
*/

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// Profile
Route::middleware('auth')->group(function () {

    Route::get('/profile', [AuthController::class, 'profile'])
        ->name('profile');

    Route::put('/profile', [AuthController::class, 'updateProfile'])
        ->name('profile.update');

});


