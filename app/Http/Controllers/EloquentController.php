<?php

namespace App\Http\Controllers;
use App\Model\Admin;
use App\Model\AdminRole;
use App\Model\AdminGroup;
class EloquentController extends Controller
{

    //查询
    public function index(){
        //查询所有数据
        /*$all = Admin::all();
        dd($all);*/
        //查询指定id的单条数据
        /*dump(Admin::find(1));*/
        //first 返回结果集当中第一条数据
        /*dump(Admin::first());*/
        /*print_r(Admin::where('name','=','guo')->first());*/
        //新增 save 或者 Admin::insert()
        /*$admin = new Admin();
        $admin->name = 'guo123';
        $admin->password = '123456';
        $admin->email = '15011592015@qq.com';
        $admin->remember_token = '123456789';
        $admin->role_id = '2';
        $bool = $admin->save();*/
        //或者
        /*$bool = Admin::insert(
           [
               'name'           => '11',
               'password'       => '11',
               'email'          => '11',
               'remember_token' => '11',
               'role_id'        => '11',
           ]
        );
        var_dump($bool);*/

        //修改
        /*$admin = Admin::find(4);
        $admin->name     = 'guo';
        $admin->password = '123456';
        $admin->email    = '15011592015@qq.com';
        $admin->remember_token = '123456';
        $admin->role_id   = '2';
        $bool = $admin->save();
        var_dump($bool);*/

        //直接删除
       /* $admin = Admin::find(5)->delete();
        var_dump($admin);*/

        //软删除
        /*$admin = Admin::find(8)->delete();
        var_dump($admin);*/

       //强制查询软删除数据
        /*$admin = Admin::withTrashed()->find(8);
        dump($admin);*/

        //恢复数据
        /*$admin = Admin::withTrashed()->find(8)->restore();
        dump($admin);*/

        //批量操作
       /* $data = [
            'name'           => '123',
            'password'       => '112222',
            'email'          => '123',
            'remember_token' => '123',
            'role_id'        => '123',
        ];
        $admin = Admin::create($data);
        var_dump($admin);*/


    }


    public function role(){

        //用户找角色
        /*$request = Admin::find(1)->AdminRole->toArray();*/
        //角色找用户 反向关联
        /*$request = AdminRole::find(2)->role->toArray();*/
        //一对多
        //$request = AdminRole::find(1)->roles->toArray();
        //多对多
        //$request = Admin::find(5)->AdminGroup->toArray();
        //$request1 = Admin::find(1)->AdminGroup1->toArray();

        //远程一对多
        $request = Admin::find(1)->many->toArray();
        dump($request);
    }

}
