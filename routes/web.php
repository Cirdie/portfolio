<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'index']);

// About Routes
Route::resource('about', AboutController::class);

// Skills Routes
Route::resource('skills', SkillController::class);

// Contacts Routes
Route::resource('contacts', ContactController::class);


Route::prefix('admin')->name('admin.')->group(function () {

    // About Routes
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index'); // Show About
        Route::post('/store', [AboutController::class, 'store'])->name('store'); // Add About
        Route::post('/update/{about}', [AboutController::class, 'update'])->name('update'); // Update About
        Route::delete('/delete/{about}', [AboutController::class, 'destroy'])->name('destroy'); // Delete About
    });

    // Skills Routes
    Route::prefix('skills')->name('skills.')->group(function () {
        Route::get('/', [SkillController::class, 'index'])->name('index'); // Show Skills
        Route::post('/store', [SkillController::class, 'store'])->name('store'); // Add Skill
        Route::delete('/delete/{skill}', [SkillController::class, 'destroy'])->name('destroy');
    });

    // Contacts Routes
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index'); // Show Contacts
        Route::post('/store', [ContactController::class, 'store'])->name('store'); // Add Contact
        Route::post('/update/{contact}', [ContactController::class, 'update'])->name('update'); // Update Contact
    });

});
