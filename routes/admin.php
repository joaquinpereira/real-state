<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::group(['namespace' => 'Admin','middleware' => 'auth:admin', 'prefix'=>'admin'] ,function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    });

});



Route::group(['namespace' => 'Admin','middleware' => 'guest:admin', 'prefix'=>'admin'] ,function(){
    Route::get('login', [LoginController::class, 'showLogin'])->name('show.admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});


