<?php

namespace App\Admin\Controllers;

use App\Models\User;

use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UsersController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            // 页面标题
            $content->header('用户列表');

            $content->body($this->grid());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->name('用户名');
            $grid->email('邮箱');
            $grid->email_verified('已验证邮箱')->display(function($value) {
                return $value ? '是' : '否';
            });

            $grid->created_at('注册时间');

            $grid->disableCreateButton();

            $grid->actions(function ($actions){
                // 不在每一行后面展示删除按钮
                $actions->disableDelete();

                // 不在每一行后面展示编辑按钮
                $actions->disableEdit();
            });

            $grid->tools(function ($tools){
                // 禁用批量删除按钮
                $tools->batch(function ($batch){
                    $batch->disableDelete();
                });
            });
        });
    }
}
