<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminGroup extends Model
{
    //
    protected $table = 'admin_group';
    //设置表主键
    protected $primaryKey = 'group_id';
}
