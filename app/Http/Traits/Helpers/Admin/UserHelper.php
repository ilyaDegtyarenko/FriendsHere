<?php

namespace App\Http\Traits\Helpers\Admin;

trait UserHelper
{
    /**
     * Return admin model
     *
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function model()
    {
        return config('backpack.base.admin_model');
    }

    /**
     * Return admin route
     *
     * @return string
     */
    public static function route()
    {
        return config('backpack.base.route_prefix') . '/user';
    }

    /**
     * Return admin entities
     *
     * @return object
     */
    public static function entities()
    {
        return (object)[
            'singular' => trans('entities.user.singular'),
            'plural' => trans('entities.user.plural'),
            'whom' => trans('entities.user.whom'),
        ];
    }
}