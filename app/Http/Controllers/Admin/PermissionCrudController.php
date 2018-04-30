<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PermissionRequest;
use App\Http\Traits\Helpers\Admin\PermissionHelper;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class PermissionCrudController extends CrudController
{
    use PermissionHelper;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(self::model($core));
        $this->crud->setRoute(self::route($core));
        $this->crud->setEntityNameStrings(self::entities($core)->singular, self::entities($core)->plural);

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

    }

    public function store(PermissionRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(PermissionRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
