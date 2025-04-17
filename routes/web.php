<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\IndexController as MainIndexController;

use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Admin\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Admin\Category\DeleteController as AdminCategoryDeleteController;

use App\Http\Controllers\Admin\Tag\IndexController as AdminTagIndexController;
use App\Http\Controllers\Admin\Tag\CreateController as AdminTagCreateController;
use App\Http\Controllers\Admin\Tag\StoreController as AdminTagStoreController;
use App\Http\Controllers\Admin\Tag\ShowController as AdminTagShowController;
use App\Http\Controllers\Admin\Tag\EditController as AdminTagEditController;
use App\Http\Controllers\Admin\Tag\UpdateController as AdminTagUpdateController;
use App\Http\Controllers\Admin\Tag\DeleteController as AdminTagDeleteController;


Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [MainIndexController::class, '__invoke']);
}
);

Route::group(['namespace' => 'category', 'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminIndexController::class, '__invoke']);
    });

    Route::group(['namespace' => 'category', 'prefix' => 'category'], function () {
        Route::get('/', [AdminCategoryIndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [AdminCategoryCreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/', [AdminCategoryStoreController::class, '__invoke'])->name('admin.category.store');
        Route::get('/{category}', [AdminCategoryShowController::class, '__invoke'])->name('admin.category.show');
        Route::get('/{category}/edit', [AdminCategoryEditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/{category}', [AdminCategoryUpdateController::class, '__invoke'])->name('admin.category.update');
        Route::delete('/{category}', [AdminCategoryDeleteController::class, '__invoke'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'tag', 'prefix' => 'tags'], function () {
        Route::get('/', [AdminTagIndexController::class, '__invoke'])->name('admin.tag.index');
        Route::get('/create', [AdminTagCreateController::class, '__invoke'])->name('admin.tag.create');
        Route::post('/', [AdminTagStoreController::class, '__invoke'])->name('admin.tag.store');
        Route::get('/{tag}', [AdminTagShowController::class, '__invoke'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [AdminTagEditController::class, '__invoke'])->name('admin.tag.edit');
        Route::patch('/{tag}', [AdminTagUpdateController::class, '__invoke'])->name('admin.tag.update');
        Route::delete('/{tag}', [AdminTagDeleteController::class, '__invoke'])->name('admin.tag.delete');
    });

});

Auth::routes();

