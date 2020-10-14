<?php

use App\Http\Controllers\SleekPostController;

Route::namespace('GabrielFemi\Contact\Sleek-Post\Http\Controllers')->get('sleek-post', [SleekPostController::class, 'welcome']);
