<?php

$key = 'winner';
$time = time();
$payload = array(
    "data" => [
        "name" => "ZiHang Gao",
        "admin" => true,
        "update_at" => "2018-12-31 12:27:45",
    ],
    "iss" => "winner",  //jwt签发者
    "sub" => "test@1626.com", //jwt面向用户
    "aud" => "www.baidu.com",//接收jwt一方
    "exp" => $time+120,//什么时候过期，用Unix时间戳
    "lat" => $time,//什么时间后签发
    "nbf" => $time,
    "jti" => md5('id'),
);
// 加密
$token = jwt_encode($payload, $key);
echo $token;
try{

    $decoded_token = jwt_decode($token, $key,['jti'=>md5('id')]);
}catch(\Exception $e) {
    $decoded = ['msg' =>'token不对'];
}
file_put_contents('linx.txt',"token".$time."\n".$token."\n",8);
echo json_encode($decoded);

