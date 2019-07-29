<?php

namespace App\Admin\Controllers;

use App\Models\GoodsAttribute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class GoodsAttributeController extends Controller
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
        $grid = new Grid(new GoodsAttribute);

        $grid->id('Id');
        $grid->name('Name');
        $grid->category_id('Category id');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(GoodsAttribute::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->category_id('Category id');
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
        $form = new Form(new GoodsAttribute);

        $form->text('name', 'Name');
        $form->number('category_id', 'Category id');

        return $form;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function apiShow(Request $request) {
        $category_id = (empty($request->input('q'))) ? 0 : $request->input('q');
        $attr = $this->findGoodsAttributeByCategoryId($category_id);
        return (empty($attr)) ? $this->findGoodsAttributeByCategoryId(0) : $attr;
    }

    /**
     * @param $category_id
     * @return array
     */
    public function findGoodsAttributeByCategoryId($category_id) {
        return GoodsAttribute::with([
            'value' => function ($value) {
                $value->select('id', 'attribute_id', 'name as text');
            }
        ])->where('category_id', $category_id)->get()->toArray();
    }
}
