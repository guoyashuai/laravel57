<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//测试api
Route::get('index',function (){
   return '测试api';
});

//定义资源路由
Route::resource('ApiIndex','Api\V1\UserController');

Route::group(['prefix'=>'v1','namespace'=>'Api\V1'],function (){
    Route::resource('ApiIndex','UserController');
});


//Route::resource('ApiIndex/{create}','Api\V1\UserController');

//jwt 测试
Route::group(['namespace'=>'Api\V1'],function (){
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
    Route::post('refresh','AuthController@refresh');
    Route::post('user','AuthController@user');
});

//Dingo
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',[
    'namespace' => 'App\Http\Controllers\Api\V1',
    'middleware' => ['api'],
],function ($api){
    $api->get('test', function(){
        return 'this is test dingo api';
    });
    $api->post('authorizations', 'AuthorizationsController@store');
    $api->get('socials/authorizations', 'AuthorizationsController@socialStore')->middleware('wechat.oauth')->name('socials.authorizations');
    //微信公众号菜单设置
    $api->resource('wechatmenu','WechatMenuController');
});

//19-1-19校验用户登录
Route::get('test/user', function (){
    dd(auth('api')->check());
});
//header中加入Accept:application/prs.teach.v2+json
$api->version('v2', function($api) {
    $api->get('test2', function(){
        return 'this is test dingo api2';
    });
});

