<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $table = 'admin_role';
    //设置表主键
    protected $primaryKey = 'role_id';

    //反向关联 一对一
    public function role(){
//        return $this->belongsTo('App\Model\Admin','role_id','role_id');
        return $this->belongsTo(Admin::class,'role_id','role_id');
    }


    //反向关联 一对多
    public function roles(){
//        return $this->hasMany('App\Model\Admin','role_id','role_id');
        return $this->hasMany(Admin::class,'role_id','role_id');
    }
}
