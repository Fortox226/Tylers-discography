<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('adminpanel', [App\Http\Controllers\AdminPanelController::class, 'index'])->name('adminpanel');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('albums', App\Http\Controllers\AlbumController::class);
    Route::resource('songs', App\Http\Controllers\SongController::class);
    
});