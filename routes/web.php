<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () { return view('dashboard');})->name('dashboard');
    Route::get('/billing', function () { return view('billing');})->name('billing');
    Route::get('/changelog', function () { return view('changelog');})->name('changelog');
    Route::get('/document', function () { return view('document');})->name('document');
    Route::get('/pricing', function () { return view('pricing');})->name('pricing');
    Route::get('/profile', function () { return view('profile');})->name('profile');
    Route::get('/settings', function () { return view('settings');})->name('settings');
    Route::get('/layout', function () { return view('layout');})->name('layout');
});

// 404 Page route, which will be displayed, if specified url is not found.
Route::fallback(function () {return view('404-error');});

require __DIR__.'/auth.php';
