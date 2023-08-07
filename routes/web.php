<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news/create', 'create')->name('news.create');
        Route::post('/news/store', 'store')->name('news.store');
        Route::get('/news/index', 'index')->name('news.index');
        Route::get('/news/destroy/{new}', 'destroy')->name('news.destroy');
        Route::get('/news/edit/{new}', 'edit')->name('news.edit');
        Route::post('/news/update/{new}', 'update')->name('news.update');
    });

    Route::controller(MemberController::class)->group(function () {
        Route::get('/members/create', 'create')->name('members.create');
        Route::post('/members/store', 'store')->name('members.store');
        Route::get('/members/index', 'index')->name('members.index');
        Route::get('/members/destroy/{new}', 'destroy')->name('members.destroy');
        Route::get('/members/edit/{new}', 'edit')->name('members.edit');
        Route::post('/members/update/{new}', 'update')->name('members.update');
    });
});

require __DIR__.'/auth.php';
