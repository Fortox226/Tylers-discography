<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('albums', App\Http\Controllers\AlbumController::class);
    Route::resource('songs', App\Http\Controllers\SongController::class);
});
