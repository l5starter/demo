<?php

namespace App\Http\Middleware;

use Closure, Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest()) {
            return redirect('login');
        }

        if (! $request->user()->hasRole($role)) {
            abort(403);
        }

        return $next($request);
    }
}
