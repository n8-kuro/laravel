<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/num8', [PostController::class, 'show']);

Route::get('/num9', [PostController::class, 'city']);