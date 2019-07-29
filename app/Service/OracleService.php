<?php

namespace App\Service;

use App\Contracts\DBService;

class OracleService implements DBService
{

    public function index($sql)
    {
        return 'oracle服务index方法'.$sql;
    }

    public function cont($sql)
    {
        return 'oracle服务cont方法'.$sql;

    }

    public function select($sql)
    {
        return 'oracle服务select方法'.$sql;

    }
}
