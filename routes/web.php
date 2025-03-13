<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// ✅ Portfolio Home Page Route
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/portfolio/about', [AboutController::class, 'show'])->name('portfolio.about');


// ✅ Skills Page Route
Route::get('/portfolio/skills', [SkillController::class, 'index'])->name('portfolio.skills');

// ✅ Contact Page Route
Route::get('/portfolio/contact', [ContactController::class, 'index'])->name('portfolio.contact');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); // ✅ Add this route

    // About Routes
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/store', [AboutController::class, 'store'])->name('store');
        Route::post('/update/{about?}', [AboutController::class, 'update'])->name('update');
        Route::delete('/delete/{about}', [AboutController::class, 'destroy'])->name('destroy');
    });

    // Skills Routes
    Route::prefix('skills')->name('skills.')->group(function () {
        Route::get('/', [SkillController::class, 'index'])->name('index'); // Show Skills
        Route::post('/store', [SkillController::class, 'store'])->name('store'); // Add Skill
        Route::delete('/delete/{skill}', [SkillController::class, 'destroy'])->name('destroy');
    });

 // ✅ Contacts Routes (Only One Entry Allowed)
Route::prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index'); // ✅ Show Contact (Only One)
    Route::post('/update', [ContactController::class, 'storeOrUpdate'])->name('update'); // ✅ Store or Update Contact
    Route::delete('/delete', [ContactController::class, 'destroy'])->name('destroy'); // ✅ Delete Contact
});


});
