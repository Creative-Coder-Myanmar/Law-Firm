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
    return view('admin.news.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news/create', 'create')->name('news.create');
        Route::post('/news/store', 'store')->name('news.store');
        Route::get('/news/index', 'index')->name('news.index');
        Route::get('/news/destroy/{slug}', 'destroy')->name('news.destroy');
    });
});

require __DIR__.'/auth.php';
