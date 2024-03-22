<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



    Route::middleware(['auth'])->group(function () {

        Route::get('/',[HomeController::class,'index']);
        Route::resource('articles',ArticleController::class);
        Route::get('articles/details/{id}',[ArticleController::class,'details'])->name('articles.details');
        Route::resource('users',UserController::class);


        Route::resource('abouts',AboutController::class);
        Route::resource('privacy-policy',PrivacyController::class);
        Route::resource('contacts',ContactController::class);
        Route::resource('medias',MediaController::class);
        Route::resource('messages',MessageController::class);
    });
