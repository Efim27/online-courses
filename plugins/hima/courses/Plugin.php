<?php namespace Hima\Courses;

use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        UserModel::extend(function($model) {
            $model->belongsToMany['courses'] = ['Hima\Courses\Models\Course', 'table' => 'hima_courses_course_user'];
        }); 
    }
}
