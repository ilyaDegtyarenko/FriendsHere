<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Http\Traits\Helpers\Admin\UserHelper;
use App\Http\Traits\Helpers\Admin\PermissionHelper;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class UserCrudController extends CrudController
{
    use UserHelper;
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
        $this->crud->setModel(self::userModel());
        $this->crud->setRoute(self::userRoute());
        $this->crud->setEntityNameStrings(self::userEntities()->whom, self::userEntities()->plural);

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        /*Columns*/
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => trans('structure.label.name'),
                'type' => 'text',
            ],
            [
                'name' => 'email',
                'label' => trans('structure.label.email'),
                'type' => 'email',
            ],
            [
                'label' => trans('entities.role.singular'),
                'type' => 'select_multiple',
                'name' => 'roles',
                'entity' => 'roles',
                'attribute' => 'name',
                'model' => self::permissionModel('role'),
            ],
            [
                'label' => trans('entities.permission.plural'),
                'type' => 'select_multiple',
                'name' => 'permissions',
                'entity' => 'permissions',
                'attribute' => 'name',
                'model' => self::permissionModel('permission'),
            ],
        ]);

        /*Fields*/
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => trans('structure.label.name'),
                'type' => 'text',
            ],
            [
                'name' => 'email',
                'label' => trans('structure.label.email'),
                'type' => 'email',
            ],
            [
                'name' => 'password',
                'label' => trans('structure.label.password'),
                'type' => 'password',
            ],
            [
                'name' => 'password_confirmation',
                'label' => trans('structure.label.password_confirmation'),
                'type' => 'password',
            ],
            [
                'label' => trans('entities.permission.plural'),
                'field_unique_name' => 'user_role_permission',
                'type' => 'checklist_dependency',
                'name' => 'roles_and_permissions',
                'subfields' => [
                    'primary' => [
                        'label' => trans('entities.role.singular'),
                        'name' => 'roles',
                        'entity' => 'roles',
                        'entity_secondary' => 'permissions',
                        'attribute' => 'label_ru',
                        'model' => self::permissionModel('role'),
                        'pivot' => true,
                        'number_columns' => 3,
                    ],
                    'secondary' => [
                        'label' => trans('entities.permission.plural'),
                        'name' => 'permissions',
                        'entity' => 'permissions',
                        'entity_primary' => 'roles',
                        'attribute' => 'label_ru',
                        'model' => self::permissionModel('permission'),
                        'pivot' => true,
                        'number_columns' => 1,
                    ],
                ],
            ],
        ]);

    }

    /**
     * Store method
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $this->_handlePasswordInput($request);
        // use $this->data['entry'] or $this->crud->entry
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    /**
     * Update method
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request)
    {
        $this->_handlePasswordInput($request);
        // use $this->data['entry'] or $this->crud->entry
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }

    /**
     * Destroy method
     *
     * @param int $id
     * @return string|void
     */
    public function destroy($id)
    {
        // use $this->data['entry'] or $this->crud->entry
        dd('destroy: ', $id);
    }

    /**
     * Handle password input fields
     *
     * @param UserRequest $request
     */
    private function _handlePasswordInput(UserRequest $request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', bcrypt($request->input('password')));
        } else {
            $request->request->remove('password');
        }
    }
}
