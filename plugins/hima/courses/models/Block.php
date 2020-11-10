<?php namespace Hima\Courses\Models;

use Model;

/**
 * Model
 */
class Block extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $belongsTo = [
        'course' => ['Hima\Courses\Models\Course']
    ];
    public $hasMany = [
        'lessons' => ['Hima\Courses\Models\Lesson']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_courses_blocks';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}