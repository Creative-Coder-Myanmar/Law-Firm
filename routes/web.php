<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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
    return redirect()->route('news.index');
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
});

require __DIR__.'/auth.php';
