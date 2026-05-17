<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FrontController;

/*
* Front Routes
*/
Route::name('front.')->controller(FrontController::class)->group(function() {
    // ============================== Home Page
    Route::get('/', 'index')->name('index');

    // ============================== About Page
    Route::get('/about', 'about')->name('about');

    // ============================== Service Page
    Route::get('/service', 'service')->name('service');

    // =============================== Contact Page
    Route::get('/contact', 'contact')->name('contact');
});

/**
 * Admin Routes
 */
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function() {
    
    Route::middleware('auth')->group(function(){
        Route::view('/', 'admin.index')->name('index');

        // ======================================= Services
        Route::controller(ServiceController::class)->group(function(){
            Route::resource('services', ServiceController::class);
        });

        // ======================================= Features
        Route::controller(FeatureController::class)->group(function(){
            Route::resource('features', FeatureController::class);
        });

        // ======================================= Messages
        Route::controller(MessageController::class)->group(function(){
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });

        // ======================================= Subscibers
        Route::controller(SubscriberController::class)->group(function(){
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });

        // ======================================= Testmonials
        Route::controller(TestmonialController::class)->group(function(){
            Route::resource('testmonials', TestmonialController::class);
        });

        // ======================================= Settings
        Route::controller(SettingController::class)->group(function(){
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
    });

    require __DIR__.'/auth.php';
});