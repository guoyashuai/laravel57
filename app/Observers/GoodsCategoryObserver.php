<?php

namespace App\Observers;
use App\Models\GoodsCategory;

class GoodsCategoryObserver
{
    public function creating(GoodsCategory $goodsCategory) {
        //如果创建的是一个根类目
        if (is_null($goodsCategory->parent_id) || $goodsCategory->parent_id == 0) {
            //讲层级设置为0
            $goodsCategory->level = 0;
            //将path 设为 -
            $goodsCategory->possess = '-';
        }else {
            //将层级设为父类目层级 + 1
            $goodsCategory->level = intval($goodsCategory->parent->level) + 1;
            // 将path 设为父级目的的PATH 追加父级的id 并最后 跟上一个  -  分隔符
            $goodsCategory->possess = $goodsCategory->parent->possess.$goodsCategory->parent_id.'-';
        }
    }

    /**
     * Handle the goods category "created" event.
     *
     * @param  \App\GoodsCategory  $goodsCategory
     * @return void
     */
    public function created(GoodsCategory $goodsCategory)
    {
        //
    }

    /**
     * Handle the goods category "updated" event.
     *
     * @param  \App\GoodsCategory  $goodsCategory
     * @return void
     */
    public function updated(GoodsCategory $goodsCategory)
    {
        //
    }

    /**
     * Handle the goods category "deleted" event.
     *
     * @param  \App\GoodsCategory  $goodsCategory
     * @return void
     */
    public function deleted(GoodsCategory $goodsCategory)
    {
        //
    }

    /**
     * Handle the goods category "restored" event.
     *
     * @param  \App\GoodsCategory  $goodsCategory
     * @return void
     */
    public function restored(GoodsCategory $goodsCategory)
    {
        //
    }

    /**
     * Handle the goods category "force deleted" event.
     *
     * @param  \App\GoodsCategory  $goodsCategory
     * @return void
     */
    public function forceDeleted(GoodsCategory $goodsCategory)
    {
        //
    }
}
