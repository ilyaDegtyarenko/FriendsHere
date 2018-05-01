<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\UnauthorizedException;

class Role
{
    public function handle($request, Closure $next, $role)
    {
        \DebugBar::addMessage($role, 'Role middleware: ');

        if (Auth::guest()) {
            return redirect('/');
        }

        $roles = is_array($role)
            ? $role
            : explode('|', $role);

        if (!Auth::user()->hasAnyRole($roles)) {
            abort(404); //return
            throw UnauthorizedException::forRoles($roles);
        }

        return $next($request);
    }
}
