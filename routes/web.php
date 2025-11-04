<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DiscographyController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', [LogoutController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('albums', App\Http\Controllers\AlbumController::class);
    Route::resource('songs', App\Http\Controllers\SongController::class);
    
});

Route::get('adminpanel', [AdminPanelController::class, 'index'])->middleware('auth');
Route::get('adminpanel/{id}', [AdminPanelController::class, 'getUser']);
Route::delete('/users/{id}', [AdminPanelController::class, 'destroy'])->name('users.destroy');
Route::patch('/admin/update-role/{id}', [AdminPanelController::class, 'updateRole'])
    ->name('admin.updateRole');

Route::get('discography', [DiscographyController::class, 'index'])->middleware('auth');

Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

