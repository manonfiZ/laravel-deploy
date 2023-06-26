<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    // Auth
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@authenticate');
        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::post('logout', 'AuthController@logout');
        });
    });

    // Articles
    Route::get('articles', 'ArticleController@all');
    Route::group(['prefix' => 'articles'], function () {

        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::post('', 'ArticleController@create');
        });
        Route::get('{slug}', 'ArticleController@findBySlug');
    });


    // Categories
    Route::get('categories', 'CategoryController@all');

    Route::group(['prefix' => 'categories'], function () {

        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::post('', 'CategoryController@create');
            Route::put('{id}', 'CategoryController@update');
            Route::delete('{id}', 'CategoryController@delete');
        });
        Route::get('{id}', 'CategoryController@findById');
    });
});