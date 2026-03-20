<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Задание 5
   Route::get('/pp4', [PostController::class, 'show']);
