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
    public $belongsTo = [
        'type' => ['Hima\Courses\Models\Type']
    ];
    public $hasMany = [
        'tags' => ['Hima\Courses\Models\Tag'],
        'blocks' => ['Hima\Courses\Models\Block']
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
