<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.home');
});

Route::get('/login', 'AuthController@login')->name('admin.login')->middleware('guest');
Route::post('/login', 'AuthController@login_store')->name('admin.login.store')->middleware('guest');

Route::middleware('admin')->group(function () {

    Route::post('logout', "AuthController@logout")->name('admin.logout');

    Route::get('/home', 'HomeController@home')->name('admin.home');
    // 0798966771
    Route::post('/profile', 'HomeController@profile')->name('admin.profile.update');
    
    Route::resource('/category', 'CategoryController')->only([
        'index', 'store', 'update', 'destroy'
    ])->names([
        'index'   => 'admin.category',
        'store'   => 'admin.category.store',
        'update'  => 'admin.category.update',
        'destroy' => 'admin.category.destroy',
    ]);

    Route::resource('/subcategory', 'SubCategoryController')->only([
        'store', 'update', 'destroy'
    ])->names([
        'store'   => 'admin.subcategory.store',
        'update'  => 'admin.subcategory.update',
        'destroy' => 'admin.subcategory.destroy',
    ]);

    Route::resource('/product', 'ProductController')->only([
        'index', 'store', 'update', 'destroy'
    ])->names([
        'index'   => 'admin.product',
        'store'   => 'admin.product.store',
        'update'  => 'admin.product.update',
        'destroy' => 'admin.product.destroy',
    ]);

    Route::post('/product/status/{product}', 'ProductController@status')->name('admin.product.status');

    Route::resource('/country', 'CountryController')->only([
        'index', 'store', 'update', 'destroy'
    ])->names([
        'index'   => 'admin.country',
        'store'   => 'admin.country.store',
        'update'  => 'admin.country.update',
        'destroy' => 'admin.country.destroy',
    ]);

    Route::resource('/delivery', 'DeliveryController')->only([
        'index', 'store', 'update', 'destroy'
    ])->names([
        'index'   => 'admin.delivery',
        'store'   => 'admin.delivery.store',
        'update'  => 'admin.delivery.update',
        'destroy' => 'admin.delivery.destroy',
    ]);
    Route::post('/delivery_price', 'DeliveryController@price')->name('admin.delivery.price');

    Route::get('/order', 'HomeController@orders')->name('admin.order');
    Route::post('/order/{order}', 'HomeController@order_delete')->name('admin.order.delete');

    Route::get('/info', 'HomeController@info')->name('admin.info');
    Route::post('/info/{info}', 'HomeController@info_update')->name('admin.info.update');
    Route::post('/image/{info}', 'HomeController@image_update')->name('admin.image.change');
});
