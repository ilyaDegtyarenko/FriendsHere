<?php

namespace App\Http\Traits\Helpers\Admin;

trait UserHelper
{
    /**
     * Return admin model
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
     * Return admin route
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
     * Return admin entities
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
}