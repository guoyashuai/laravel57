<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function create()
    {
        return view('test.create');
    }

    /**
     * @param Request $request
     * @return string|void
     */
    public function store(Request $request)
    {
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action    = $request->input('action');
        $param     = $request->input('param');

        $class  = ($className == "") ? $namespace : $namespace.'\\'.$className;
        $class  = str_replace('/' , '\\', $class);
        $object = new $class();
        $param  = ($param == "")? [] : explode("|",$param);
        $data   = call_user_func_array([$object, $action], $param);

        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}
