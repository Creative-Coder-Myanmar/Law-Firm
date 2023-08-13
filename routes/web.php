<?php

use App\Models\News;
use App\Models\Member;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ContactController;

Route::get('/admin/dashboard', function () {
    $news = News::all();
    $members = Member::all();
    return view('admin.dashboard', compact('news', 'members'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news/create', 'create')->name('news.create');
        Route::post('/news/store', 'store')->name('news.store');
        Route::get('/news', 'index')->name('admin.news.index');
        Route::get('/news/destroy/{new}', 'destroy')->name('news.destroy');
        Route::get('/news/edit/{new}', 'edit')->name('news.edit');
        Route::post('/news/update/{new}', 'update')->name('news.update');
    });

    Route::controller(MemberController::class)->group(function () {
        Route::get('/members/create', 'create')->name('members.create');
        Route::post('/members/store', 'store')->name('members.store');
        Route::get('/members', 'index')->name('members.index');
        Route::get('/members/destroy/{member}', 'destroy')->name('members.destroy');
        Route::get('/members/edit/{member}', 'edit')->name('members.edit');
        Route::post('/members/update/{member}', 'update')->name('members.update');
    });
});

// User
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/members', 'members')->name('user.members.index');
    Route::get('/members/{member:name}', 'show')->name('user.members.show');
    Route::get('/about', 'about')->name('about.index');
    // Route::get('/our-performances', 'performancesIndex')->name('performances');
    // Route::get('/our-services', 'servicesIndex')->name('services');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/show/{new:slug}', 'show')->name('news.show');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact.index');
    Route::post('/send-contact-us-mail', 'send')->name('send.email');
});
require __DIR__ . '/auth.php';
