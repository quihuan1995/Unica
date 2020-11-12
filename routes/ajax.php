<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ajax\AjaxUserController;
use App\Http\Controllers\Ajax\AjaxTagController;
use App\Http\Controllers\Ajax\AjaxCategoryController;
use App\Http\Controllers\Ajax\AjaxMenuController;


Route::group(['prefix' => 'cms'], function(){
    Route::get('users', [AjaxUserController::class,'index'])->name('users.list');
    Route::get('categories', [AjaxCategoryController::class,'index'])->name('categories.list');
    Route::get('tags', [AjaxTagController::class,'index'])->name('tags.list');
    Route::get('menus', [AjaxMenuController::class,'index'])->name('menus.list');
});