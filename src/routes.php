<?php

use GabrielFemi\SleekPost\Http\Controllers\SleekPostController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'GabrielFemi\SleekPost\Http\Controllers'], function () {
    Route::get('sleek-post', [SleekPostController::class, 'welcome']);
});
Route::get('sleek-post', [SleekPostController::class, 'welcome']);
Route::get('welcome', function () {
    return "ggaf";
});

