<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// ✅ Portfolio Public Routes
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::get('/portfolio/about', [AboutController::class, 'show'])->name('portfolio.about');
Route::get('/portfolio/skills', [SkillController::class, 'index'])->name('portfolio.skills');
Route::get('/portfolio/contact', [ContactController::class, 'index'])->name('portfolio.contact');

// ✅ Authentication Routes (Login & Register)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // ✅ Show Login Page
Route::post('/login', [AuthController::class, 'login'])->name('auth.login'); // ✅ Process Login
Route::get('/register', [AuthController::class, 'showRegister'])->name('register'); // ✅ Show Register Page
Route::post('/register', [AuthController::class, 'register'])->name('auth.register'); // ✅ Process Registration
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth'); // ✅ Logout (Only for Authenticated Users)

// ✅ Admin Routes (Only for Authenticated Users)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); // ✅ Admin Dashboard

    // ✅ About Routes
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/store', [AboutController::class, 'store'])->name('store');
        Route::post('/update/{about?}', [AboutController::class, 'update'])->name('update');
        Route::delete('/delete/{about}', [AboutController::class, 'destroy'])->name('destroy');
    });

    // ✅ Skills Routes
    Route::prefix('skills')->name('skills.')->group(function () {
        Route::get('/', [SkillController::class, 'index'])->name('index');
        Route::post('/store', [SkillController::class, 'store'])->name('store');
        Route::delete('/delete/{skill}', [SkillController::class, 'destroy'])->name('destroy');
    });

    // ✅ Contacts Routes (Only One Entry Allowed)
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/update', [ContactController::class, 'storeOrUpdate'])->name('update');
        Route::delete('/delete', [ContactController::class, 'destroy'])->name('destroy');
    });
});
