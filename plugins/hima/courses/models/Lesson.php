<?php namespace Hima\Courses\Models;

use Model;

/**
 * Model
 */
class Lesson extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $attachOne = [
        'attachment' => ['System\Models\File']
    ];
    public $belongsTo = [
        'block' => ['Hima\Courses\Models\Block']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_courses_lessons';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
