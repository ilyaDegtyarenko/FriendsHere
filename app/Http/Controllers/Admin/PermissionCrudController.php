<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PermissionRequest;
use App\Http\Traits\Helpers\Admin\PermissionHelper;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class PermissionCrudController extends CrudController
{
    use PermissionHelper;

    /**
     * Setup method
     *
     * @throws \Exception
     */
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(self::permissionModel());
        $this->crud->setRoute(self::permissionRoute());
        $this->crud->setEntityNameStrings(self::permissionEntities()->singular, self::permissionEntities()->plural);

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
