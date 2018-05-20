<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Classes\Auth\SocialAuthClass;

class SocialAuthController extends SocialAuthClass
{
    /**
     * Connecting with social clients.
     *
     * @param Request $request
     * @return mixed
     */
    public function binding(Request $request)
    {
        return \SocialAuth::driver($request->provider)->redirect();
    }
}
