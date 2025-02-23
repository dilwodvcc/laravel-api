<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::post('/upload',[CategoryController::class,'upload'])->name('upload');
Route::get('/',[CategoryController::class,'index']);
