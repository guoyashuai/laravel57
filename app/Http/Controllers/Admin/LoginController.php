<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

//        if($request->method() == 'POST'){
//            //验证器
//            $request->validate([
//                'username' => 'required|max:6|min:6',
//                'password' => 'required|max:6|min:4',
//            ]);
//
//            return '登录成功';
//        }else if(Session::get('errors')){
//
//            return Session::get('errors');
//        }
        return view('login');
    }

    //自定义验证器判断
    public function enter(LoginRequest $request){
        return $request->validated();
    }
    public function error(){
        return '错误页面';
    }
}
