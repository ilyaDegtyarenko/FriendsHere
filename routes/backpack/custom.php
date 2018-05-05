<?php
// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix'),
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['web', 'role:admin'],
], function () {

    /*Users*/
    CRUD::resource('user', 'UserCrudController');

    /*Permissions*/
    CRUD::resource('role', 'PermissionCrudController');
    CRUD::resource('permission', 'PermissionCrudController');
});
