<?php

namespace App\Http\Middleware;

use Closure;

class CheckWebAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //webCheck 自定义  查看文档
        if (auth('api')->webCheck()) {
            return $next($request);
        }
        return redirect()->route('auth.login.create');
    }
}
