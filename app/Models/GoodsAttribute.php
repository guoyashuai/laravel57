<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttribute extends Model
{
    //
    protected $fillable = ['name', 'category_id'];

    public function value()
    {
        return $this->hasMany(GoodsAttributeValue::class, 'attribute_id');
    }
}
