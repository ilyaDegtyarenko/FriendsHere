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

Route::middleware('web')->group(function () {

    Auth::routes();

    Route::namespace('Auth')->prefix('auth')->group(function () {
        Route::get('{provider}', 'SocialAuthController@binding')->where('provider', '[A-Za-z]+')->name('social.auth');
        Route::get('{provider}/callback', 'SocialAuthController@handle');
    });

    Route::namespace('Initial')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('blocked', 'BlockController@index')->name('block');
    });

    Route::get('test', function () {
        return \App\Http\Traits\Helpers\Tools\BlockUser::blockUser();
    })->where([
        'num' => '[0-9]+',
        'name' => '[a-z]+'
    ]);

});