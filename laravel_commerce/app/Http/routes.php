<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'categories'], function () {

        Route::get('', ['as' => 'admin.categories', 'uses' => 'AdminCategoriesController@categories']);
        Route::get('update/', ['as' => 'admin.categories.update', 'uses' => 'AdminCategoriesController@update']);
        Route::get('delete/', ['as' => 'admin.categories.delete', 'uses' => 'AdminCategoriesController@delete']);
        Route::get('edit/', ['as' => 'admin.categories.edit', 'uses' => 'AdminCategoriesController@edit']);


    });
    Route::group(['prefix' => 'products'], function () {

        Route::get('', ['as' => 'admin.products', 'uses' => 'AdminProductsController@products']);
        Route::get('update/', ['as' => 'admin.Products.update', 'uses' => 'AdminProductsController@update']);
        Route::get('delete/', ['as' => 'admin.Products.delete', 'uses' => 'AdminProductsController@delete']);
        Route::get('edit/', ['as' => 'admin.Products.edit', 'uses' => 'AdminProductsController@edit']);

    });
});

Route::get('/', 'WelcomeController@index');
Route::get('exemplo', 'WelcomeController@exemplo');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
