<?php

// zmienne Controllerów do Routingów
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DiscographyController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\ResetPasswordController;


// Strona logowania i powrót na nią w przypadku wylogowania
Route::get('/', [LogoutController::class, 'index'])->name('home');

// Autoryzacja roli na stronach
Auth::routes();

// Strona główna
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dodanie do routingów danych z klas Album i Song
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('albums', App\Http\Controllers\AlbumController::class);
    Route::resource('songs', App\Http\Controllers\SongController::class);
    
});

// Admin panel
Route::get('adminpanel', [AdminPanelController::class, 'index'])->middleware('auth');
Route::get('adminpanel/{id}', [AdminPanelController::class, 'getUser']); // Pobieranie informacji o użytkownikach
Route::delete('/users/{id}', [AdminPanelController::class, 'destroy'])->name('users.destroy'); // usuwanie użytkowników
Route::patch('/admin/update-role/{id}', [AdminPanelController::class, 'updateRole']) // Aktualizacja roli (user/admin)
    ->name('admin.updateRole');

// Strona z albumami
Route::get('discography', [DiscographyController::class, 'index'])->middleware('auth');


// Resetowanie hasła
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

