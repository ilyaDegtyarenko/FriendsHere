<?php

namespace App\Http\Classes\Helpers\Admin;

use App\Http\Traits\Helpers\Admin\UserHelper;
use App\Http\Traits\Helpers\Admin\PermissionHelper;

class ViewHelper
{
    /**
     * User route url.
     *
     * @var string
     */
    public $userRoute;

    /**
     * Role route url.
     *
     * @var mixed
     */
    public $roleRoute;

    /**
     * Permission route url.
     *
     * @var mixed
     */
    public $permissionRoute;

    /**
     * ViewHelper constructor.
     */
    public function __construct()
    {
        $this->userRoute = UserHelper::userRoute(false);
        $this->roleRoute = PermissionHelper::permissionRoute('role', false);
        $this->permissionRoute = PermissionHelper::permissionRoute('permission', false);
    }
}