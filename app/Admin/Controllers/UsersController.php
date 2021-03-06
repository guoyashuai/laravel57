<?php

namespace App\Admin\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class UsersController extends Controller
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
        $grid = new Grid(new User);

        $grid->id('Id');
        $grid->image_head('头像')->image(config('app.url'),100,100);
        $grid->name('用户');
        $grid->email('邮箱');
        $grid->email_verified_at('邮箱校验');
        $grid->password('密码');
        $grid->weixin_openid('微信 openid');
        $grid->remember_token('Remember token');
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
        $show = new Show(User::findOrFail($id));

        $show->id('Id');
        $show->image_head('头像')->image(config('app.url'),100,100);
        $show->name('用户');
        $show->email('邮箱');
        $show->email_verified_at('邮箱校验');
        $show->password('密码');
        $show->weixin_openid('微信 openid');
        $show->remember_token('Remember token');
        $show->created_at('创建时间');
        $show->updated_at('更改时间');


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', '用户');
        $form->email('email', '邮箱');
        $form->datetime('email_verified_at', '邮箱是否校验')->default(date('Y-m-d H:i:s'));
        $form->password('password', '密码');
        $form->text('weixin_openid', '微信 openid');
        $form->text('remember_token', 'Remember token');
        $form->image('image_head', '头像');

        return $form;
    }
}
