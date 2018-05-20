<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PermissionRequest;
use App\Http\Traits\Helpers\Admin\PermissionHelper;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class PermissionCrudController extends CrudController
{
    use PermissionHelper;

    /**
     * Setup method.
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

        /*Columns*/
        $this->crud->addColumns([
            [
                'name' => 'name',
                'label' => trans('structure.label.name'),
                'type' => 'text',
            ],
            [
                'name' => 'label_en',
                'label' => trans('structure.label.label') . ' (en)',
                'type' => 'text',
            ],
            [
                'name' => 'label_ru',
                'label' => trans('structure.label.label') . ' (ru)',
                'type' => 'text',
            ],
            [
                'name' => 'updated_at',
                'label' => trans('structure.label.updated_at'),
                'type' => 'text',
            ],
            [
                'name' => 'guard_name',
                'type' => 'text',
            ],
            [
                'label' => self::permissionReverseData()->label,
                'type' => 'select_multiple',
                'name' => self::permissionReverseData()->method,
                'entity' => self::permissionReverseData()->method,
                'attribute' => 'name',
                'model' => self::permissionReverseData()->model,
                'pivot' => true,
            ]
        ]);

        /*Fields*/
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => trans('structure.label.name'),
                'type' => 'text',
            ],
            [
                'name' => 'label_en',
                'label' => trans('structure.label.label') . ' (en)',
                'type' => 'text',
            ],
            [
                'name' => 'label_ru',
                'label' => trans('structure.label.label') . ' (ru)',
                'type' => 'text',
            ],
            [
                'name' => 'guard_name',
                'type' => 'text',
            ],
            [
                'label' => self::permissionReverseData()->label,
                'type' => 'checklist',
                'name' => self::permissionReverseData()->method,
                'entity' => self::permissionReverseData()->method,
                'attribute' => 'name',
                'model' => self::permissionReverseData()->model,
                'pivot' => true,
            ]
        ]);
    }

    /**
     * Store method.
     *
     * @param PermissionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PermissionRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    /**
     * Update method.
     *
     * @param PermissionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PermissionRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
