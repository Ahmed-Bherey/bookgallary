<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\UserLoginController;

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

// login & logout
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'loginForm')->name('admin.login');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('user/')->controller(UserLoginController::class)->group(function(){
    Route::get('login', 'loginForm')->name('user.loginForm');
    Route::post('login', 'login')->name('user.login');
    Route::get('register', 'registerForm')->name('user.register');
    Route::post('register', 'register')->name('register');
    Route::get('logout', 'logout')->name('user.logout');
});

Route::controller(IndexController::class)->group(function(){
    Route::get('/' , 'home')->name('home');
    Route::get('/books' , 'books')->name('books.index');
    Route::get('/book_details/{id}' , 'book_details')->name('book_details.index');
    Route::get('/sub_category/{id}' , 'sub_category')->name('sub_category.index');
    Route::post('/book_details/{id}' , 'book_details_store')->name('book_details.store')->middleware('auth');
    Route::get('/categories' , 'categories')->name('categories.index');
    Route::get('/trends' , 'trends')->name('trends.index');
});

