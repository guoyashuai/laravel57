<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(){
        return $this->hasOne(GoodsCategory::class,'id','category_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prctures(){
        return $this->hasMany(Prcture::class,'goods_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prcture(){
        return $this->hasOne(Prcture::class,'goods_id','id');
    }

    /**
     * 查看sku值
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skus(){
        return $this->hasMany(GoodsSku::class,'goods_id','id');
    }

    /**
     * @return array
     */
    public function toEsArray() {
        //取出需要的字段
        $arr = array_only($this->toArray(), [
            'id' ,'title','long_title',
            'category_id','desc','sale',
            'sort','pv','state'
        ]);
        //如果商品有类目 用category字段为类目的数组  否则为空字符串
        $arr['category_name'] = $this->category ? explode(' - ', $this->category->full_name) : '';
        //类目的path字段
        $arr['category_path'] = $this->category ? $this->category->possess : '';
        //取出详情的html标签
        $arr['desc'] = strip_tags($this->desc);
        //取出sku的字段
        $arr['skus'] = $this->skus->map(function (GoodsSku $sku){
            return array_only($sku->toArray(), ['attr_name', 'price' ,'stock']);
        });
        return $arr;
    }

    public function test(){
        return Goods::find(6)->prctures;
    }
}
