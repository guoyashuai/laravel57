<?php

namespace App\Admin\Controllers;

use App\Models\GoodsCategory;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use DB;

class GoodsCategoryController extends Controller
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
        $grid = new Grid(new GoodsCategory);

        $grid->id('Id');
        $grid->name('Name');
        $grid->parent_id('Parent id');
        $grid->image('Image')->image(config('app.url'),60,60);
        $grid->level('Level');
        $grid->levels('Level');
        $grid->sort('Sort');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
        $grid->possess('Possess');
        //根据level 与 sort
        $grid->model()->orderBy('level','asc');
        $grid->model()->orderBy('sort','asc');
        $grid->model()->orderBy('id','asc');
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
        $show = new Show(GoodsCategory::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->parent_id('Parent id');
        $show->image('Image');
        $show->level('Level');
        $show->sort('Sort');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->possess('Possess');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        //不能更改
        $category = new GoodsCategory;
        $form     = new Form($category);

        $form->text('name', 'Name')->rules('required');
        $form->image('image', 'Image');
        $form->number('sort', 'Sort');
        $form->select('parent_id', 'Parent id')->options($category::selectOptions(function ($category){
            return $category->where('level','<>',2);
        }));

        /*$form->text('name', 'Name');
        $form->number('parent_id', 'Parent id');
        $form->image('image', 'Image');
        $form->number('level', 'Level');
        $form->number('sort', 'Sort');
        $form->text('possess', 'Possess');*/

        return $form;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function apiShow(Request $request) {
        $parent_id = (empty($request->input('q'))) ? 0 : $request->input('q');
        $category = GoodsCategory::where('parent_id', $parent_id)->get(['id',DB::raw('name as text'), 'level']);
        return $category;
    }

}
