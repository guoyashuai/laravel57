<?php
/**
 * Created by PhpStorm.
 * User: guo
 * Date: 2019/1/9
 * Time: 13:35
 */
namespace App\Http\Controllers\Api\V1\Traits;

trait TraitsFormer
{
    public function TraitsFormer($code,$msg,$data)
    {
        return [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
    }
}