<?php

use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainIndexController::class, '__invoke']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminIndexController::class, '__invoke']);
    Route::get('categories', [AdminCategoryIndexController::class, '__invoke']);
});

Auth::routes();

