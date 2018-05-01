<?php

namespace App\Http\Traits\Helpers\Admin;

trait PermissionHelper
{
    /**
     * Return permission model
     *
     * @param null $name
     * @param bool $debug
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function model($name = null, $debug = true)
    {
        $name = $name ?? self::core();
        if ($debug) \DebugBar::addMessage(config('permission.models.' . $name), 'PermissionHelper (model): ');
        return config('permission.models.' . $name);
    }

    /**
     * Return permission route
     *
     * @param null $name
     * @param bool $debug
     * @return mixed
     */
    public static function route($name = null, $debug = true)
    {
        $name = $name ?? self::core();
        if ($debug) \DebugBar::addMessage(config('permission.routes')[$name], 'PermissionHelper (route): ');
        return config('permission.routes')[$name];
    }

    /**
     * Return permission entities
     *
     * @param null $name
     * @return object
     */
    public static function entities($name = null)
    {
        $name = $name ?? self::core();
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
        $core = explode('/', request()->path());
        $core = (string)end($core);
        return $core;
    }
}