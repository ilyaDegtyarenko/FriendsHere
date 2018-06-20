<?php

namespace App\Http\Traits\Helpers\Admin;

use App\Models\Admin\Permission;
use App\Http\Traits\Helpers\Tools\BugReportHelper;

trait UserHelper
{
    use BugReportHelper;

    /**
     * Returns admin model.
     *
     * @param bool $debug
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function userModel($debug = true)
    {
        if ($debug) \DebugBar::addMessage(config('backpack.base.admin_model'), 'UserHelper (model): ');
        return config('backpack.base.admin_model');
    }

    /**
     * Returns admin route.
     *
     * @param bool $debug
     * @return string
     */
    public static function userRoute($debug = true)
    {
        if ($debug) \DebugBar::addMessage(config('backpack.base.route_prefix') . '/user', 'UserHelper (route): ');
        return config('backpack.base.route_prefix') . '/user';
    }

    /**
     * Returns admin entities.
     *
     * @return object
     */
    public static function userEntities()
    {
        return (object)[
            'singular' => trans('entities.user.singular'),
            'plural' => trans('entities.user.plural'),
            'whom' => trans('entities.user.whom'),
        ];
    }

    /**
     * Returns user permissions.
     *
     * @param null $request
     * @return object
     */
    public static function userCan($request = null)
    {
        if (!$request) {
            return array_pluck(auth()->user()->getAllPermissions()->all(), 'name');
        }

        if (is_string($request)) {
            return auth()->user()->can($request);
        }

        if (is_array($request)) {
            $permissionsAll = array_pluck(Permission::all(), 'name');

            $can = [];
            $canNot = [];
            $canAll = true;
            $NonexistentPermissions = [];
            foreach ($request as $permission) {
                if (!in_array($permission, $permissionsAll)) {
                    $NonexistentPermissions[] = $permission;
                    $NonexistentPermissionsString[] = ucfirst($permission);
                } else {
                    if (auth()->user()->can($permission)) {
                        $can[] = $permission;
                        $canString[] = ucfirst($permission);
                    } else if (!auth()->user()->can($permission)) {
                        $canNot[] = $permission;
                        $canNotString[] = ucfirst($permission);
                        $canAll = false;
                    }
                }
            }

            return (object)[
                'can' => $can,
                'can_string' => str_finish(implode(', ', $canString), '.'),
                'can_not' => $canNot,
                'can_not_string' => str_finish(implode(', ', $canNotString), '.'),
                'nonexistent_permissions' => $NonexistentPermissions,
                'nonexistent_permissions_string' => str_finish(implode(', ', $NonexistentPermissionsString), '.'),
                'can_all' => $canAll,
            ];
        }

        self::bugReport(request(), 'Undefined error');
        abort(500, 'Undefined error in UserHelper trait. Calling class: ' . class_basename(request()->route()->getAction()['controller']));
    }
}