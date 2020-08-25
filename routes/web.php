<?php

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

Route::group(['namespace' => 'Web'], function(){
    Route::get('/', 'HomeController@index')->name('web.index');
    Route::get('/categoria', 'HomeController@category')->name('web.home.category');
    Route::get('/producto', 'HomeController@product')->name('web.home.product');
    Route::get('/carrito-de-compras', 'HomeController@cartView')->name('web.home.cart-section');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.panel.index');

    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'ProductController@index')->name('admin.panel.products.index');
        Route::get('/create', 'ProductController@create')->name('admin.panel.products.create');
        Route::get('/list-photos', 'ProductController@showPhotos')->name('admin.panel.products.list-photos');
    });

    Route::group(['prefix' => 'sales'], function(){
        Route::get('/', 'SaleController@index')->name('admin.panel.sales.index');
        Route::get('/detail/{id}', 'SaleController@detail')->name('admin.panel.sales.detail');
    });
});
