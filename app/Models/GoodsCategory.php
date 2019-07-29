<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GoodsCategory
 * @package App\Models
 */
class GoodsCategory extends Model
{
    use ModelTree,AdminBuilder;
    //
    protected  $fillable = ['name', 'category_image'];
    //自定义属性字段
    protected  $appends = ['levels'];

    /**
     * GoodsCategory constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setParentColumn('parent_id');
        $this->setOrderColumn('sort');
        $this->setTitleColumn('name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        //反向关联
        return $this->belongsTo(GoodsCategory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        //一对多
        return $this->hasMany(GoodsCategory::class, 'parent_id');
    }


    /**
     * 定义一个访问器，获取所有祖先类目的ID值
     * @return array
     */
    public function getPossessIdsAttribute()
    {
        //array_filter 将数组中的空值移除
        return array_filter(explode('-', trim($this->possess, '-')));
    }


    /**
     * 定义一个访问器，获取祖先类目并按层级排序
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAncestorsAttribute()
    {
        return GoodsCategory::query()
            ->whereIn('id', $this->possess_ids)
            //按层级排序
            ->orderBy('level')->get();
    }

    /**
     * 定义一个访问器，获取以 - 为分隔的所有祖先类目的名称以及当前类目的名称
     * @return mixed
     */
    public function getFullNameAttribute()
    {
        return $this->ancestors //获取所有祖先类
            ->pluck('name') //获取祖先类目的name 字段为一个数组
            ->push($this->name)//获取当前类目的 name 字段加到数组的末尾
            ->implode(' - '); //用 - 符合将数组的值组成一个字符串
    }

    /**
     * @return mixed
     */
    public function test() {
        $category = GoodsCategory::where('id', 10)->first();

        return $category->ancestors->toArray();
    }

    /**
     * @param $value
     * @return array|mixed
     */
    public function getLevelAttribute($value) {
        $data = [
            '0' => '根目录',
            '1' => '二级',
            '2' => '三级',
        ];
        return (is_null($this->attributes['level'])) ? $data : $this->attributes['level'];
    }

    /**
     * 层级字段访问
     * @return array|mixed
     */
    public function getLevelsAttribute($value) {
        $data = [
            '0' => '根目录',
            '1' => '二级',
            '2' => '三级',
        ];
        return (is_null($this->attributes['level'])) ? $data : $data[$this->attributes['level']];
    }

}
