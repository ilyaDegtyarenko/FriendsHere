<?php

namespace App\Http\Traits\Helpers\Tools;

trait BlockUser
{
    use BugReportHelper;

    /**
     * Route to lock page.
     *
     * @var string
     */
    protected static $blockRoute = 'block';

    /**
     * User lock.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function blockUser()
    {
        if ($user = auth()->user()) {
            if (!$user->is_blocked) {
                $user->update([
                    'is_blocked' => 1
                ]);
            }
            auth()->logout();
            request()->session()->flush();
            request()->session()->invalidate();
            request()->session()->flash('user', $user);
            request()->session()->keep($user);
            return redirect()->route(self::$blockRoute);
        } else {
            return redirect()->route('login');
        }
    }
}