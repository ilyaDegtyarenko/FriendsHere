<?php

/*
|--------------------------------------------------------------------------
| Backpack\Base Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Backpack\Base package
|
*/

Route::group([
    'middleware' => ['web', 'role:admin'],
    'prefix' => config('backpack.base.route_prefix', 'admin'),
],
    function () {

        Route::group([
            'namespace' => 'Backpack\Base\app\Http\Controllers',
        ], function () {

            /*If not otherwise configured, setup the auth routes*/
            if (config('backpack.base.setup_auth_routes')) {

                /*Authentication Routes*/
                Route::get('login', 'Auth\LoginController@showLoginForm')->name('backpack.auth.login');
                Route::post('login', 'Auth\LoginController@login');
                Route::get('logout', 'Auth\LoginController@logout')->name('backpack.auth.logout');
                Route::post('logout', 'Auth\LoginController@logout');

                /*Registration Routes*/
                Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('backpack.auth.register');
                Route::post('register', 'Auth\RegisterController@register');

                /*Password Reset Routes*/
                Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
                Route::post('password/reset', 'Auth\ResetPasswordController@reset');
                Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
                Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');
            }

            /*If not otherwise configured, setup the dashboard routes*/
            if (config('backpack.base.setup_dashboard_routes')) {
                Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
                Route::get('/', 'AdminController@redirect')->name('backpack');
            }

            /*If not otherwise configured, setup the "my account" routes*/
            if (config('backpack.base.setup_my_account_routes')) {
                Route::get('edit-account-info', 'Auth\MyAccountController@getAccountInfoForm')->name('backpack.account.info');
                Route::post('edit-account-info', 'Auth\MyAccountController@postAccountInfoForm');
                Route::get('change-password', 'Auth\MyAccountController@getChangePasswordForm')->name('backpack.account.password');
                Route::post('change-password', 'Auth\MyAccountController@postChangePasswordForm');
            }
        });

        /*Custom routes*/
        Route::group([
            'namespace' => 'App\Http\Controllers\Admin',
        ], function () {

            /*Users*/
            CRUD::resource('user', 'UserCrudController');

            /*Permissions*/
            CRUD::resource('role', 'PermissionCrudController');
            CRUD::resource('permission', 'PermissionCrudController');

        });

    });