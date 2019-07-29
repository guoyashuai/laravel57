<?php

namespace App\Http\Controllers;

use App\Contracts\DBService;
use App\Service\MysqlService;
use App\Service\OracleService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $DB;

    function __construct(DBService $DB)
    {
        //$this->middleware('test');
        $this->DB = $DB;
    }

    public function demo()
    {
        echo 123;
    }
    /**
     * index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return $this->DB->index('-----');
        //echo 'TestController@index';die;
        //视图文件
//        return view('home/test',['name'=>'guo']);

        return '测试';
    }

    /**
     * 测试契约
     * contracts(TestService $test) 高级一点
     * @param TestService $test
     * @return string
     */
    public function contracts()
    {
        //强耦合 依赖的关系
        //$test = new TestService();
        return $this->DB->index('233');
//        return $DB->index('2222');

    }




























}
