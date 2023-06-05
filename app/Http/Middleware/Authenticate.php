<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    // public function handle(Request $request, Closure $next)
    // {
    //     if (Auth::guard('admin')->user()) {
    //         return $next($request);
    //     }
    //     if ($request->ajax() || $request->wantsJson()) {
    //         return response('Unauthorized.', 401);
    //     } else {
    //         return redirect(route('adminLogin'));
    //     }
    // }
}
