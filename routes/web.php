<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;

Route::get('/', [AlbumController::class, 'index']);
Route::get('/add-album', [AlbumController::class, 'createAlbum']);

Route::get('/add-track', [TrackController::class, 'index']);


Route::get('/{slug}', [AlbumController::class, 'notFound']);
