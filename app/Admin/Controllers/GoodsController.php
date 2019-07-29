<?php

namespace App\Admin\Controllers;

use App\Models\Goods;
use App\Http\Controllers\Controller;
use App\Models\GoodsAttribute;
use App\Models\GoodsCategory;
use App\Models\Prcture;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class GoodsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods);

        $grid->id('Id');
        $grid->category('商品分类')->display(function ($value){
            return GoodsCategory::find($value['id'])->full_name;
        });
        $grid->prctures('商品主图')->display(function ($prctures){
            return Prcture::where([
                'goods_id' => $prctures[0]['goods_id'],
                'is_main'  => 1
            ])->value('url');
        })->image(config('app.url'),50,50);
        $grid->image('Image')->image(config('app.url'),60,60);

        $grid->desc('Desc');
        $grid->state('State')->display(function ($value){
            return $value?'是':'否';
        });
        $grid->state_date('商品上架的时间');
        $grid->pv('商品点击的PV量');
        $grid->sale('销售量');
        $grid->sort('排序');
        $grid->created_at('创建时间');
        $grid->updated_at('更改时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Goods::findOrFail($id));

        $show->id('Id');
        $show->category_id('Category id');
        $show->image('Image');
        $show->desc('Desc');
        $show->state('State');
        $show->state_date('State date');
        $show->pv('Pv');
        $show->sale('Sale');
        $show->sort('Sort');
        $show->deleted_at('Deleted at');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Goods);

        $form->select('category_1', '商品分类第一级')
            ->options(url('admin/api/category'))
            ->load('category_2',url('admin/api/category'));

        $form->select('category_2', '商品分类第二级')
            ->load('category_id',url('admin/api/category'));

        $form->select('category_id', '商品分类第三级')->loadEmbeds(url('admin/api/attribute'),
            function (){
                return <<<EOF
        $(".has-many-skus-form").each(function(index, skus_div) {
        let skus =$(skus_div);
        let new_ = 'new_'+(index + 1);
        skus.find("select[data-attr='skus-attr']").parent().parent().remove();
        skus.find("input[data-attr='skus-attr']").remove();
        let html = '';
        for (i=0; i<data.length; i++) {
            //添加隐藏的input属性 
            html += `<input type="hidden" name="skus[\${new_}][attribute_id-\${data[i]['id']}]" value="\${data[i]['id']}" class="skus attribute_id-\${data[i]['id']}" data-attr="skus-attr">`;
            //添加显示的属性
            html += `<div class="form-group  ">
                <label for="attribute_value_id-\${data[i]['id']}" class="col-sm-2  control-label">商品\${data[i]['name']}的属性值</label>
                <div class="col-sm-8">
                  <input type="hidden" name="skus[\${new_}][attribute_value_id-\${data[i]['id']}]">
                  <select class="form-control skus attribute_value_id-\${data[i]['id']} select2-hidden-accessible" style="width: 100%;" name="skus[\${new_}][attribute_value_id-\${data[i]['id']}]" data-attr="skus-attr" data-value="" tabindex="-1" aria-hidden="true">
                    <option value=""></option>`;
        for (j=0; j < data[i]['value'].length; j++) {
            html += `<option value="\${data[i]['value'][j]['id']}">\${data[i]['value'][j]['text']}</option>`;
        }
        html += `</select>
        </div>
      </div>`;
        }
        skus.prepend(html).trigger('change');
        });
    for(i=0; i<data.length; i++) {
    $(".skus.attribute_value_id-"+data[i]['id']).select2({
    "allowClear":true,"placeholder":{"id":"","text":"\u5546\u54c1\u989c\u8272\u7684\u5c5e\u6027\u503c"}});
    }
EOF;
            });

        $form->image('prcture.url', '商品主图');
        //多图上传
        $form->multipleFile('prctures','其他图片');
        $form->text('title','标题');
        $form->text('long_title','长标题');
        $form->multipleFile('prctures','其他图片');
        $form->hidden('prcture.is_main')->value(1);
        //多图上传
        $form->editor('desc', '商品描述')->value(1);
        $form->radio('state', '上架')->options(['1' => '是', '0' => '否'])->default(0);
        // 规避不进行添加的字段
        $form->ignore(['category_1', 'category_2', 'category']);
        // 这是事件函数
        $form->saving(function (Form $form) {
//           dd($form->input());
        });

        $form->hasMany('skus', 'SKU列表', function (Form\NestedForm $form) {
            /*//预载入商品时，通过模型关联获取商品的属性值
            $attrs = GoodsAttribute::with([
                'value' => function ($value) {
                    $value->select('id', 'attribute_id', 'name as text');
                }
            ])->where('category_id', 3)
                ->get()->toArray();

            foreach ($attrs as $attr) {
                //设置属性名的id值。以备保存到数据表(sku)的attrs字段
                $form->hidden('attribute_id-' . $attr['id'])  ->value($attr['id'])->attribute('data-attr', 'skus-attr');
                $result = [];
                //构建属值id与值对应的数组
                array_map(function ($value) use(&$result){
                    $result [$value['id']] = $value['text'];
                }, $attr['value']);

                //把数组的数据展示到下拉框
                $form->select('attribute_value_id-' . $attr['id'] , '商品' . $attr['name'] .'的属性值')
                    ->options($result)
                    ->attribute('data-attr', 'skus-attr');
            }*/
            $form->hidden('attrs');
            $form->decimal('price', '价格')
                ->default(0.00)->rules('required');
            $form->number('stock', '库存')
                ->rules('required');

        });

        //动态sku属性,回调处理sku
        $form->saving(function (form $form){
            $this->prctures($form);
            $this->skus($form);
            return $form;
        });

        /*$form->number('category_id', 'Category id');
        $form->image('image', 'Image');
        $form->text('desc', 'Desc');
        $form->number('state', 'State');
        $form->datetime('state_date', 'State date')->default(date('Y-m-d H:i:s'));
        $form->number('pv', 'Pv');
        $form->number('sale', 'Sale');
        $form->number('sort', 'Sort');*/

        return $form;
    }

    //商品多图处理
    private function prctures($form){
        $prctures = $form->input('prctures');
        $prctures['__extend__'] = function ($model,&$array){
            $data = [];
            foreach ($array as $value){
                $data[] = [
                    'url'     => $value,
                    'is_main' => 0,
                ];
            }
            $array = $data;
        };
        $form->input('prctures', $prctures);
    }

    //商品sku
    private function skus($form){
        //处理sku商品的属性值
        $skus = $form->input('skus');

        if(empty($skus)){
            return;
        }

        foreach ($skus as $keys=>$sku){
            $data = '';
            foreach ($sku as $key=>$value){
                if(strstr($key,'attribute_id')){
                    $data .= ','.$value.':'.$sku['attribute_value_id-'.$value];
                }
            }

            $skus[$keys]['attrs'] = substr($data,1);
        }

        //通过闭包方式设置 sku的默认图片 ---->默认图片就是商品的主图
        $skus['__extend__'] = function ($model,&$array){

            $prcture = new Prcture();
            $prcture_id = $prcture->where([
                'goods_id' => $model->id,
                'is_main'  => 1,
            ])->value('id');

            foreach ($array as $key=>$value){
                $array[$key]['prcture_id'] = $prcture_id;
                $array[$key]['category_id'] = $model->category_id;
            }
        };
        $form->input('skus', $skus);
    }



}
