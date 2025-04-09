<?php

use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainIndexController::class, '__invoke']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminIndexController::class, '__invoke']);
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [AdminCategoryIndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [AdminCategoryCreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/', [AdminCategoryStoreController::class, '__invoke'])->name('admin.category.store');
    });
});

Auth::routes();

