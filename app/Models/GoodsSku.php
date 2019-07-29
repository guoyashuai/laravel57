<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsSku extends Model
{
    //
    protected $fillable = ['price', 'prcture_id' , 'stock', 'category_id','attrs'];

    /*public function getAttributes($value)
    {
        $data = [];
        foreach (explode(',',$value) as $key=>$attrs){
            $attrs = explode(',',$attrs);
            $array = GoodsAttribute::find($attrs[1])->toArray();
            $array['value'] = GoodsAttributeValue::find($attrs[1])->toArray();
            $data[] = $array;
        }
        return $data;
    }*/

    /**
     * 商品图片
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prcture() {
        return $this->hasOne(Prcture::class, 'id', 'prcture_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category() {
        return $this->hasOne(GoodsCategory::class, 'id', 'category_id');
    }
}
