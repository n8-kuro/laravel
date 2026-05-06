<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/num30', [PostController::class, 'task_30']);