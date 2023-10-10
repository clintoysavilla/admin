<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CertificationRequest;

class CertificationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CertificationRequest';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CertificationRequest());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('firstname', __('Firstname'));
        $grid->column('lastname', __('Lastname'));
        $grid->column('address', __('Address'));
        $grid->column('municipality', __('Municipality'));
        $grid->column('province', __('Province'));
        $grid->column('postal', __('Postal'));
        $grid->column('phonenumber', __('Phonenumber'));
        $grid->column('email', __('Email'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('status', __('Status'));
        $grid->column('document', __('Document'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(CertificationRequest::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('firstname', __('Firstname'));
        $show->field('lastname', __('Lastname'));
        $show->field('address', __('Address'));
        $show->field('municipality', __('Municipality'));
        $show->field('province', __('Province'));
        $show->field('postal', __('Postal'));
        $show->field('phonenumber', __('Phonenumber'));
        $show->field('email', __('Email'));
        $show->field('purpose', __('Purpose'));
        $show->field('status', __('Status'));
        $show->field('document', __('Document'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CertificationRequest());

        $form->number('user_id', __('User id'));
        $form->text('firstname', __('Firstname'));
        $form->text('lastname', __('Lastname'));
        $form->text('address', __('Address'));
        $form->text('municipality', __('Municipality'));
        $form->text('province', __('Province'));
        $form->text('postal', __('Postal'));
        $form->text('phonenumber', __('Phonenumber'));
        $form->email('email', __('Email'));
        $form->text('purpose', __('Purpose'));
        $form->text('status', __('Status'))->default('Pending');
        $form->text('document', __('Document'))->default('Certificate');

        return $form;
    }
}
