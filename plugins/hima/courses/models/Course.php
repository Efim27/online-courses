<?php namespace Hima\Courses\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $attachOne = [
        'attachment' => ['System\Models\File']
    ];
    public $attachMany = [
        'files' => ['System\Models\File']
    ];
    public $belongsTo = [
        'type' => ['Hima\Courses\Models\Type']
    ];
    public $belongsToMany = [
        'tags' => ['Hima\Courses\Models\Tag', 'table' => 'hima_courses_course_tag'],
        'users' => ['RainLab\User\Models\User', 'table' => 'hima_courses_course_tag']
    ];
    public $hasOne = [
        'preview' => ['Hima\Courses\Models\Preview']
    ];
    public $hasMany = [
        'blocks' => ['Hima\Courses\Models\Block'],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_courses_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
