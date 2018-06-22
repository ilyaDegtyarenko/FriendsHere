<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Traits\Helpers\Tools\BlockUser;

class VerifyUserLock
{
    use BlockUser;

    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->is_blocked) {
            return self::blockUser();
        }
        return $next($request);
    }
}
