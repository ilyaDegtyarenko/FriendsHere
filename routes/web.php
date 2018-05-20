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

Route::get('/', 'HomeController@index')->middleware('web')->name('index');

Route::namespace('Auth')->prefix('auth')->middleware('web')->group(function () {
    Route::get('{provider}', 'SocialAuthController@binding')->where('provider', '[A-Za-z]+')->name('social.auth');
    Route::get('{provider}/callback', 'SocialAuthController@handle');
});

Route::get('get', function () {
    Auth::logout();
    dd(Auth::check());
})->where(['num' => '[0-9]+', 'name' => '[a-z]+']);
