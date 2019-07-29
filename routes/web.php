<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('guo', function () {
    return 'guo';
});
//重定向路由
Route::redirect('/hello', '/guo', 301);
Route::get('test', 'TestController@index');
Route::get('demo', 'TestController@demo');

//控制器内核分离重组
Route::any('/{class}-{action}', function ($class,$action) {
    $class = 'App\\Http\\Controllers\\'.ucfirst(strtolower($class)).'Controller';
    $dispatcher = new App\Service\ControllerDispatcher;
    return $dispatcher->run($class,$action);
})->where(['module'=>'[0-9a-z]+', 'class'=>'[0-9a-z]+','action'=>'[0-9a-z]+']);

//视图路由
Route::view('/welcome', 'welcome', ['name' => 'hello welcome']);

//必填参数
Route::get('test/{name}/{id}', function ($name,$id) {
    return 'test==='.$name.'---'.$id;
})->where('name', '[A-Za-z]+')->name('test');
//可选参数
Route::get('user/{name?}', function ($name = 'guo') {
    return $name;
});


//路由分组
Route::group(['prefix'=>'order','namespace'=>'order'],function (){
    Route::get('index', 'OrderController@index');
    Route::get('ListOrder', 'OrderController@ListOrder');
});



Route::get('request', function () {
    return view('request/login');
});

Route::post('hello_from', 'LoginController@index');

//验证器
//Route::any('login','Admin\LoginController@login');
//Route::any('enter','Admin\LoginController@enter');
//Route::any('error','Admin\LoginController@error');

Route::post('hello_from', 'LoginController@index');


//配置连接
Route::get('db', 'DbController@index');

//增删改查操作
Route::get('add', 'DbController@add');
Route::get('update', 'DbController@update');
//事务
Route::get('trans', 'DbController@trans');
//查询构造器
Route::get('get', 'DbController@get');


//Eloquent ORM模型
Route::get('Eloquent', 'EloquentController@index');
Route::get('role', 'EloquentController@role');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//web
//测试自定义路由
Route::get('test',function (){
    return api_route('socials.authorizations');
});
Route::get('wechat', function (Request $request) {
    /* return redirect('https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx55a4c06eeb918e02&redirect_uri=http://g5pdqi.natappfree.cc/winner/vip/weidian/public/index.php/oauth&response_type=code&scope=snsapi_userinfo&state=winner#wechat_redirect');*/
    $app = app('wechat.official_account');
    return $app->oauth->scopes(['snsapi_userinfo'])->redirect();
});
//获取code
Route::get('oauth', function (Request $request) {
    /*return $request->input();*/
    //easywechat获取
    $app = app('wechat.official_account');
    dd($app->oauth->setRequest($request)->user());
});
//wechat中间件调用方式
Route::get('user', function () {
    $user = session('wechat.oauth_user.default');
    dd($user);
})->middleware('wechat.oauth');

//登录界面
Route::get('login','Auth\LoginController@create')->middleware(
    ['check.browser']
)->name('auth.login.create');

//首页
Route::namespace('Wap')->group(function (){
    Route::get('/','IndexController')->name('index');
    //微信公众号对接
    //Route::get('member/','MemberController@index')->name('wap.member.index');
//    Route::get('member/','MemberController@index')->middleware('check.webauth')->name('wap.member.index');
    Route::get('member/','MemberController@index')->middleware('auth:api')->name('wap.member.index');
    //显示商品的分类
    Route::get('category','CategoryController@index')->name('wap.category.index');
    Route::get('goods','GoodsController@index')->name('wap.goods.index');
    Route::get('goods/{id}','GoodsController@show')->name('wap.goods.show');


});

//请求地址  https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx55a4c06eeb918e02&redirect_uri=http://g5pdqi.natappfree.cc/winner/vip/weidian/public/index.php/oauth&response_type=081yhuf52cKE7Q0pEYd52Bmcf52yhufk&scope=snsapi_userinfo&state=winner#wechat_redirect
//获取access_token
//https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx55a4c06eeb918e02&secret=b49477b017b8dac1b4781a36e2218681&code=081yhuf52cKE7Q0pEYd52Bmcf52yhufk&grant_type=authorization_code
//获取用户信息
// https://api.weixin.qq.com/sns/userinfo?access_token=17_NEddmhlqzzF6u5WA1yQcpOSX-AhPom5YSnD_v8icg_s8a7Q4f6m32qMNumtSMcgPTvt_z6HT5o9IH8_SHACYoA&openid=oN68A1MO818fqhpkv0wuPBMU48qc&lang=zh_CN