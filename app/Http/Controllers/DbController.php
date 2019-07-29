<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Mockery\Exception;

class DbController extends Controller
{

    //查询
    public function index(){
        //找到默认的配置
        //$result = DB::select("SELECT * FROM `user`");
        //指定配置连接
        //$result = DB::connection('guo')->select("SELECT * FROM `user`");
        //预处理SQL   select参数 1、SQL语句 2、预处理语句的值(数组传参)
        $result = DB::connection('guo')->select('SELECT * FROM `user` where id =?' , [2]);
        //
        $result1 = DB::connection('guo')->select('SELECT * FROM `user` where id =:id' , ['id'=>1]);
        dd($result1);
    }


    /**
     * 添加
     */
    public function add(){
        //新增
        $result = DB::connection('guo')->select('insert into `user` (`userName`,`userPwd`) value (?,?)' , ['guo','guo']);
        dd($result);
    }

    //修改
    public function update(){
        $result = DB::connection('guo')->select("update `user` set userPwd = 'guo1'  where id = ?", ['10']);
        dd($result);
    }

    //事务
    public function trans(){
        //自动事务
        DB::transaction(function (){
            //修改
            $num = DB::update("update `user` set userPwd = 'guo1'  where id = ?", ['10']);
            //删除
            $num1 = DB::delete('delete from `user` where id = 2');
            var_dump($num,$num1);
            try{
                if($num>0 && $num1>0){
                    echo '成功';
                    //事务提交
                    DB::commit();
                }else{
//                    throw new \Exception("事务操作失败");
                }
            }catch (Exception $e){
                echo $e->getMessage();

                DB::rollBack();
            }

        });
    }


    public function get(){
        //查询构造器结果返回的是Class对象
        /*$result = DB::table('user')->get();
        //前端输出值
        foreach ($result as $key=>$val){
            echo $val->id;
        }*/
        //对象转化为数组  toArray 只是转化一维结果为数组
        //$result = DB::table('user')->get()->toArray();
        //对象全部转化为数组
        /**$result = DB::table('user')->get()->map(function ($value){
            return (array)$value;
        })->toArray();*/
        //Where方法的使用 写法 默认是 = 号
        /*$result = DB::table('user')->where('id','>' ,1)->get();
        $result = DB::table('user')->where('id',10)->get();*/
        //多条件查询
        /*$result = DB::table('user')->where([
            'id'       => 10,
            'userName' => 'guo',
        ])->get();*/
        //排序：latest降序  oldest 升序  默认按照日期时间排序
        /*$result = DB::table('user')->latest('id')->get();*/
        //分组   注意这里有一个问题 ，在使用这个方法的时候一定要把config/databases.php中的'strict'  => false,修改一下
        /*$result = DB::table('user')->groupBy('id')->get();*/
        //限制结果集  limit 限制结果显示  offset 偏移量
        /*$result1 = DB::table('user')->offset(1)->limit(2)->get();
        //take 跳过指定数量的结果 skip 偏移量
        $result = DB::table('user')->skip(1)->take(2)->get();
        var_dump($result,$result1);*/
        //修改数据
        /*$result = DB::table('user')->where('id',10)->update(['userName'=>'guo1']);
        var_dump($result);*/
        //联合查询 (join == inner join )
        //first 查询单条
        /*$result = DB::table('user')->join('news','news.user_id','=','user.id')->first();*/
        //联合查询闭包方式
       /* $result = DB::table('user')->join('news',function ($request){
            $request->on('news.user_id','=','user.id')
                ->where('user.id',10);
        })->first();*/
        //子查询
        $result = DB::table('news')
            ->select('user_id',DB::raw('username as name'))
            ->where('user_id','>','6')
            ->orderBy('user_id','desc');
        $user = DB::table('user')->joinsub($result , 'news',function ($join){
            $join->on('user.id','=', 'news.user_id');
        })->get();

        var_dump($user);
    }












}
