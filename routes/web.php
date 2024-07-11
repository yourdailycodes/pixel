<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;


// PUBLIC AREA
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('works', [LandingController::class, 'works'])->name('works');
Route::get('contact-us', [LandingController::class, 'contact'])->name('contact');


// DASHBOARD ROUTES
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// PROFILE ACTIONS
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


// LOGIN ACTIONS
Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

});

// require __DIR__.'/auth.php';
