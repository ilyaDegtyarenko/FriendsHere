<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Http\Traits\Helpers\Admin\UserHelper;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class UserCrudController extends CrudController
{
    use UserHelper;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(self::model());
        $this->crud->setRoute(self::route());
        $this->crud->setEntityNameStrings(self::entities()->whom, self::entities()->plural);

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        //        $this->crud->addFields(
        //            [
        //                // two interconnected entities
        //                'label' => 'User Role Permissions',
        //                'field_unique_name' => 'user_role_permission',
        //                'type' => 'checklist_dependency',
        //                'name' => 'roles_and_permissions', // the methods that defines the relationship in your Model
        //                'subfields' => [
        //                    'primary' => [
        //                        'label' => 'Roles',
        //                        'name' => 'roles', // the method that defines the relationship in your Model
        //                        'entity' => 'roles', // the method that defines the relationship in your Model
        //                        'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
        //                        'attribute' => 'name', // foreign key attribute that is shown to user
        //                        'model' => "Backpack\PermissionManager\app\Models\Role", // foreign key model
        //                        'pivot' => true, // on create&update, do you need to add/delete pivot table entries?]
        //                        'number_columns' => 3, //can be 1,2,3,4,6
        //                    ],
        //                    'secondary' => [
        //                        'label' => 'Permission',
        //                        'name' => 'permissions', // the method that defines the relationship in your Model
        //                        'entity' => 'permissions', // the method that defines the relationship in your Model
        //                        'entity_primary' => 'roles', // the method that defines the relationship in your Model
        //                        'attribute' => 'name', // foreign key attribute that is shown to user
        //                        'model' => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
        //                        'pivot' => true, // on create&update, do you need to add/delete pivot table entries?]
        //                        'number_columns' => 3, //can be 1,2,3,4,6
        //                    ],
        //                ],
        //            ]
        //        );
        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    /**
     * Store method
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
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
}
