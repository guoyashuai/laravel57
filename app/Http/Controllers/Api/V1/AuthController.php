<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\V1\Traits\TraitsFormer;
class AuthController extends Controller
{
    use TraitsFormer;
    //登录
    public function login(Request $request)
    {
        $data = $request->only('email','password');

        if(!($token = auth('api')->attempt($data))){
            return $this->TraitsFormer('100','login error','登录错误');
        }

        return $this->TraitsFormer('200','login success',['token' => $token ]);
    }

    //退出
    public function logout(Request $request)
    {
        auth('api')->logout();

        return $this->TraitsFormer('100','Successfully logged out','logout');
    }

    //重置
    public function refresh(Request $request)
    {
        return $this->TraitsFormer('100','Successfully logged out',['token' => auth('api')->refresh() ]);

    }

    //用户信息
    public function user(Request $request){

        return $this->TraitsFormer('100','Successfully User',[auth('api')->user() ]);
    }

}
