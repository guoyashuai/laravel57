<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prcture extends Model
{
    //
    protected $fillable = ['is_man','url','goods_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function goods(){
        return $this->belongsTo(Goods::class,'id','goods_id');
    }
}
