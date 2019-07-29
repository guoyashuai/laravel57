<?php

namespace App\Service;

use App\Contracts\DBService;

class MysqlService implements DBService
{

   public function index($sql)
   {
       return 'mysql服务index方法'.$sql;
   }

   public function cont($sql)
   {
       return 'mysql服务cont方法'.$sql;

   }

   public function select($sql)
   {
        return 'mysql服务select方法'.$sql;

   }
}
