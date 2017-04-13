<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //处在登录的状态才能访问，否则跳转到登录页面
        if (!session('power.home.user')) {
            return redirect(url('/login'));
        }
        return $next($request);
    }
}
