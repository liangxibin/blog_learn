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

Route::get('/', function () {
    return view('welcome');
});
//指明控制器的namespace,@符分割控制器和控制器的方法
Route::prefix('home')->namespace('Home')->group(function (){
    //IndexController下的方法路由
    Route::prefix('index')->group(function(){
        Route::get('index','IndexController@index');
        Route::get('store','IndexController@store');
        Route::get('edit/{id}','IndexController@edit');
        Route::get('create','IndexController@create');
    });
    //ArticleController下的方法路由
    Route::prefix('article')->group(function(){
        Route::get('index','ArticleController@index');
        Route::get('store','ArticleController@store');
        Route::post('edit','ArticleController@edit');
        Route::get('create','ArticleController@create');
    });
});
Route::prefix('admin')->namespace('Admin')->group(function (){
    //IndexController下的方法路由
    Route::prefix('index')->group(function(){
        Route::get('index','IndexController@index');
        Route::get('store','IndexController@store');
        Route::post('edit','IndexController@edit');
        Route::get('create','IndexController@create');
    });
});

