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

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');

Route::get('/home', 'HomeController@index');

Route::group([ 'prefix' => 'admin', 'middleware' => 'isAdmin' ], function () {
    Route::get('admin', 'Admin\AdminController@index');
});

Route::get('admin', 'Admin\AdminController@index')->name('admin.home');
