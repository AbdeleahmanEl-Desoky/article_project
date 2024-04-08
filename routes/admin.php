<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleDetailsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\SettingController;
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
        Route::group(['prefix'=>'articles','as'=>'articles.'],function(){
            Route::post('upload',[ArticleController::class,'upload'])->name('upload');
            Route::group(['prefix'=>'details','as'=>'details.'],function(){
                Route::get('/{id}',[ArticleDetailsController::class,'index'])->name('create');
                Route::post('store/{id}',[ArticleDetailsController::class,'store'])->name('store');
                Route::get('show/{id}',[ArticleDetailsController::class,'show'])->name('show');
                Route::get('edit/{id}',[ArticleDetailsController::class,'edit'])->name('edit');
                Route::post('update/{id}',[ArticleDetailsController::class,'update'])->name('update');
                Route::delete('destroy/{id}',[ArticleDetailsController::class,'destroy'])->name('destroy');
            });
        });

        Route::resource('users',UserController::class);


        Route::get('abouts',[SettingController::class,'aboutIndex'])->name('abouts.index');
        Route::get('abouts/store',[SettingController::class,'aboutStore'])->name('abouts.store');


        Route::get('contacts',[SettingController::class,'contactIndex'])->name('contact.index');
        Route::get('contacts/store',[SettingController::class,'contactStore'])->name('contact.store');


        Route::get('medias',[SettingController::class,'mediaIndex'])->name('media.index');
        Route::get('medias/store',[SettingController::class,'mediaStore'])->name('media.store');

        Route::get('privacy-policy',[SettingController::class,'privacyBpolicyIndex'])->name('privacyBpolicy.index');
        Route::get('privacy-policy/store',[SettingController::class,'privacyBpolicyStore'])->name('privacyBpolicy.store');

        Route::get('messages',[SettingController::class,'messagesIndex'])->name('messages.index');
        
    });
