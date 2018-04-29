<?php

namespace App\Helpers\Admin;

class User
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

    public static function entity()
    {
        return (object)[
            'singular' => trans('entities.user_singular'),
            'plural' => trans('entities.user_plural'),
            'whom' => trans('entities.user_whom'),
        ];
    }
}