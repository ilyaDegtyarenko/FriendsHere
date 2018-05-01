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
        $this->crud->setModel(self::model());
        $this->crud->setRoute(self::route());
        $this->crud->setEntityNameStrings(self::entities()->singular, self::entities()->plural);
        
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

//        $this->crud->setFromDb();
        $this->crud->addColumn('name');
        $this->crud->addField('name');
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
