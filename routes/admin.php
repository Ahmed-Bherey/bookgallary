<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('admin_auth')->prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // General Settings
    Route::prefix('generalSetting')->controller(GeneralSettingController::class)->group(function(){
        Route::get('/' , 'create')->name('generalSetting.create');
        Route::post('/' , 'store')->name('generalSetting.store');
    });
    // category
    Route::prefix('category')->controller(CategoryController::class)->group(function(){
        Route::get('/', 'create')->name('category.create');
        Route::post('/', 'store')->name('category.store');
        Route::get('/{id}', 'edit')->name('category.edit');
        Route::post('/{id}', 'update')->name('category.update');
        Route::get('/destroy/{id}', 'destroy')->name('category.destroy');
    });
    // book
    Route::prefix('book')->controller(BookController::class)->group(function(){
        Route::get('/', 'create')->name('book.create');
        Route::post('/', 'store')->name('book.store');
        Route::get('/{id}', 'edit')->name('book.edit');
        Route::post('/{id}', 'update')->name('book.update');
        Route::get('/destroy/{id}', 'destroy')->name('book.destroy');
    });
});
