<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SendQController;
use Illuminate\Support\Facades\Route;



//Route::get('/posts', function () {
//
//    return view('posts::index');
//});
Route::get('/posts',[\JBorn74\Posts\Http\Controllers\PostController::class,'index'])->name('index');
