<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::post('/users', [AuthController::class, 'register']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
