<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DiscographyController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('albums', App\Http\Controllers\AlbumController::class);
    Route::resource('songs', App\Http\Controllers\SongController::class);
    
});

Route::get('adminpanel', [AdminPanelController::class, 'index'])->middleware('auth');
Route::get('discography', [DiscographyController::class, 'index'])->middleware('auth');

