<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //$router->resource('user','UserController');
    //有头像字段
    $router->resource('user','UsersController');
    //商品分类
    $router->resource('category','GoodsCategoryController');
    //商品
    $router->resource('goods','GoodsController');
    //商品三级联动
    $router->get('api/category', 'GoodsCategoryController@apiShow');
    $router->get('api/attribute', 'GoodsAttributeController@apiShow');
    $router->get('api/attributeValue', 'GoodsCategoryController@apiShow');

});
