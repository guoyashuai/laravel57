<?php

use App\Models\GoodsCategory;
use Illuminate\Database\Seeder;

class GoodsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name'     => '手机配件',
                'sort'     => '0',
                'children' => [
                    [
                        'name'     => '手机壳',
                        'sort'     => '0',
                        'children' => [
                            [
                                'name' => '华为V10手机',
                                'sort'     => '0',
                            ],
                            [
                                'name' => '小米',
                                'sort'     => '1',
                            ],
                        ],
                    ],
                    [
                        'name'     => '数据线',
                        'sort'     => '4',
                        'children' => [
                            [
                                'name' => '苹果数据线',
                                'sort'     => '0',
                            ],
                            [
                                'name' => '安卓数据线',
                                'sort'     => '1',
                            ],
                        ],
                    ],
                    [
                        'name'     => '耳机',
                        'sort'     => '0',
                        'children' => [
                            [
                                'name' => '有线耳机',
                                'sort'     => '1',
                            ],
                            [
                                'name' => '蓝牙耳机',
                                'sort'     => '0',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name'     => '六星果园',
                'sort'     => '0',
                'children' => [
                    [
                        'name'     => '国产水果',
                        'sort'     => '0',
                        'children' => [
                            [
                                'name' => '苹果',
                                'sort'     => '0',
                            ],
                            [
                                'name' => '梨',
                                'sort'     => '1',
                            ],
                        ],
                    ],
                ]
            ]
        ];
        foreach ($categories as $data) {
            $this->createCategory($data);
        }
    }


    public function createCategory($data, $parent = null)
    {
        // 创建一个分类
        $category = new GoodsCategory([
            'name' => $data['name'],
            'sort' => $data['sort'],
        ]);
        // 如果有父级参数，代表有父类目
        if (!is_null($parent)) {
            // 将模型实例与给定的父实例关联。
            $category->parent()->associate($parent);
        }
        // 保存到数据库
        $category->save();
        // 如果有children字段并且 children字段是一个数组
        if (isset($data['children']) && is_array($data['children'])) {
            foreach ($data['children'] as $child) {
                $this->createCategory($child, $category);
            }
        }
    }
}
