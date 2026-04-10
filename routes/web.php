<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/num8', [PostController::class, 'show']);

Route::get('/num9', [PostController::class, 'city']);

Route::get('/num10', [PostController::class, 'task_10']);

Route::get('/num11', [PostController::class, 'task_11']);

Route::get('/num12', [PostController::class, 'task_12']);

Route::get('/num14', [PostController::class, 'task_14']);

Route::get('/num17', [PostController::class, 'task_17']);

Route::get('/num18', [PostController::class, 'task_18']);