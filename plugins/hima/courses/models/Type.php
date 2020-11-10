<?php namespace Hima\Courses\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $hasMany = [
        'courses' => ['Hima\Courses\Models\Course']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_courses_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
