<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;


Route::apiResource('albums', AlbumController::class);
Route::apiResource('songs', SongController::class);