<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class RefreshJwtToken extends BaseMiddleware
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
        //如果此次请求是否带有token，如果没有抛出异常
        $this->checkForToken($request);
        //通过try 捕获token所抛出的TokenExpireException
        try {
            //检查用户的登录状态 如果正常就通过
            $token = $this->auth->parseToken()->refresh();
            if(!$token){
                return $next($request);
            }

            throw new UnauthorizedHttpException('jwt-auth', '未登录');

        } catch (TokenExpiredException $e) {
            try{
                //刷新用户token
                $token = $this->auth->refresh();
                echo '<br>----statr----<br>';
                echo $token;
                echo '<br>----end----<br>';
                //使用一次登录，保证请求成功访问
                $sub = $this->auth->manager()->getPayloadFactory()->buildClaimsCollection()->toPlainArray()['sub'];
                auth('api')->onceUsingId($sub);

            } catch (JWTException $exception){
                throw  new UnauthorizedHttpException('jwt-auth', $exception->getMessage());
            }
        }

        //在响应头中返回新的token
        return $this->setAuthenticationHeader($next($request), $token);
    }
}
