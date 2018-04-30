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

Route::get('/{name}', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]
)->where('name', 'home|/|')->name('home');
