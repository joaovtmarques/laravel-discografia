<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumController;

Route::resource('/', AlbumController::class);
