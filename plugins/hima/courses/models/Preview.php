<?php namespace Hima\Courses\Models;

use Model;

/**
 * Model
 */
class Preview extends Model
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
    public $attachOne = [
        'attachment' => ['System\Models\File'],
        'attachment_big' => ['System\Models\File']
    ];

    protected $jsonable = ['work_examples', 'audience', 'authors', 'faq'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_courses_preview';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
