<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//引入软删除内库
use Illuminate\Database\Eloquent\SoftDeletes;
class Admin extends Model
{
    /*//软删除
    use SoftDeletes;
    //设置表名
    protected $table = 'admin';
    //关闭自动更新时间
    public $timestamps = false;
    //设置表名id
    protected $primaryKey = 'id';
    //允许操作的属性
    protected $fillable = ['name','email'];
    //不允许操作的属性
    protected $guarded = ['password'];*/

    //设置表名
    protected $table = 'admin';
    //设置表主键
    protected $primaryKey = 'admin_id';

    //用户与角色的关联
    public function AdminRole(){
        //第一个参数  关联模型
        //第二个参数  关联模型的关联字段
        //第三个参数  本地模型的关联字段
//        return $this->hasOne('App\Model\AdminRole','role_id','role_id');
        return $this->hasOne(AdminRole::class,'role_id','role_id');
    }


    //多对多，查询用户所在的用户组
    public function AdminGroup(){
        //第一个参数  关联模型
        //第二个参数  中间表
        //第三个参数  指定中间表关联  本地模型的字段
        //第四个参数  指定中间表关联  关联模型的字段
        //第五个参数  指定本地模型关联    中间表字段
        //第六个参数  指定关联模型关联    中间表字段

        return $this->belongsToMany(AdminGroup::class,'admin_role','role_id','group_id');
    }

    public function AdminGroup1(){
        return $this->belongsToMany(AdminGroup::class,'admin_role','role_id','group_id','role_id','group_id');
    }


    //远程一对多
    public function many(){
        return $this->hasManyThrough(AdminGroup::class,'App\Model\AdminRole','role_id','group_id','role_id','group_id');
    }
}
