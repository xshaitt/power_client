<?php

namespace App\Http\Middleware;

use Closure;

class NoLoginMiddleware
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
        //处在不登录的状态才能访问，否则跳转到首页
        if (session('power.home.user')) {
            return redirect(url('/'));
        }
        return $next($request);
    }
}
