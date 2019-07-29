<?php

/*Route::get('login',function (){
    session([
        'lasttime' => time()
    ]);
    return auth('api')->attempt([
        'email' => 'boehm.lilliana@example.net',
        'password' => 'secret',
    ]);
});*/
Route::get('user1',function (){
   return auth('api')->user();

})->middleware('refresh.token');
//->middleware('jwt.check.token');
//->middleware('refresh.token')
Route::get('logout',function (){
    return auth()->logout();
});


Route::get('test_token', function (){
    session([
        'lasttime'=>time()
    ]);
    dd(auth('api')->attempt([
        'email' => '15011592015@163.com',
        'password' => '123456'
    ]));
});
//自定义api的WebCheck验证方法
Route::get('test/guard', function (){
   dd(auth('api'));
});
Route::prefix('test')->group(function(){

  Route::get('guard', function(){

      dd(auth('api')->attempt([
         'email' => 'gweimann@example.net',
         'password' => 'secret'
      ]));
//测试用书是否可以使用自定义中间件
 Route::get('users', function(Request $request){
      dd($request->session()->all());
      dd(auth('api')->webCheck());
  });
  });

});


//项目\第九节-商品设计与管理2  ----模型填充与数据测试
Route::namespace('test')->prefix('test')->group(function(){
    Route::get('create', 'TestController@create');
    Route::post('/', 'TestController@store')->name('test.store');
});

//项目\第十节-商品分类与JWT自定义问题解答
Route::get('test/guard',function (){
    echo(auth('api')->attempt([
        'email' => 'noel.considine@example.org',
        'password' => 'secret',
    ]));
});