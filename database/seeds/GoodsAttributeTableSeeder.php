<?php

use App\Models\GoodsAttribute;
use App\Models\GoodsAttributeValue;
use Illuminate\Database\Seeder;

class GoodsAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $attributes = [
            // 华为V10手机
            [
                'name'        => '颜色',
                'category_id' => 3,
                'children'    => [
                    ['name' => '红色',],
                    ['name' => '白色',],
                    ['name' => '蓝色',],
                ]
            ],
            [
                'name'        => '内存',
                'category_id' => 3,
                'children'    => [
                    ['name' => '32G',],
                    ['name' => '64G',],
                    ['name' => '124G',],
                ]
            ],
            // 小米
            [
                'name'        => '默认规格',
                'category_id' => 4,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 苹果数据线
            [
                'name'        => '默认规格',
                'category_id' => 6,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 安卓数据线
            [
                'name'        => '默认规格',
                'category_id' => 7,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 有线耳机
            [
                'name'        => '默认规格',
                'category_id' => 9,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 蓝牙耳机
            [
                'name'        => '默认规格',
                'category_id' => 10,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 苹果
            [
                'name'        => '默认规格',
                'category_id' => 13,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 梨
            [
                'name'        => '默认规格',
                'category_id' => 14,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
            // 橘子
            [
                'name'        => '默认规格',
                'category_id' => 15,
                'children'    => [
                    ['name' => '默认规格',],
                ]
            ],
        ];
        foreach ($attributes as $attribute) {
            $this->createAttribute($attribute);
        }
    }

    public function createAttribute($data)
    {
        $attribute = new GoodsAttribute([
            'name'        => $data['name'],
            'category_id' => $data['category_id']
        ]);
        // 保持数据
        $attribute->save();
        $values = [];
        foreach ($data['children'] as $value) {
            $values[] = (new GoodsAttributeValue(['name' => $value['name']]));
        }
        $attribute->value()->saveMany($values);
    }
}
