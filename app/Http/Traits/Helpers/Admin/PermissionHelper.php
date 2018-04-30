<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 30.04.18
 * Time: 18:53
 */

namespace App\Http\Traits\Helpers\Admin;

trait PermissionHelper
{
    /**
     * Return permission model
     *
     * @param $name
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function model($name)
    {
        return config('permission.models.' . $name);
    }

    /**
     * Return permission route
     *
     * @param $name
     * @return mixed
     */
    public static function route($name)
    {
        return config('permission.routes')[$name];
    }

    /**
     * Return permission entities
     *
     * @param $name
     * @return object
     */
    public static function entities($name)
    {
        return (object)[
            'singular' => trans('entities.' . $name . '.singular'),
            'plural' => trans('entities.' . $name . '.plural')
        ];
    }

    /**
     * Return core name
     *
     * @return string
     */
    public static function core()
    {
        return (string)explode('/', request()->path())[1];
    }
}