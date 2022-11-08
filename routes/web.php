<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;

Route::resource('albums', AlbumController::class);

Route::resource('tracks', TrackController::class);
