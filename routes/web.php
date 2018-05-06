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
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('/authorization/{provider}', function ($provider) {
    return \Social::driver($provider)->redirect();
})->name('social.auth');

Route::get('/authorization/{provider}/callback', function ($provider) {
    $user = \Social::driver($provider)->user();
    dd($user);
});