<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;


Route::get('/', MainIndexController::class);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', AdminIndexController::class);
});

Auth::routes();

