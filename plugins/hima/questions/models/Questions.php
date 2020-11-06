<?php namespace Hima\Questions\Models;

use Model;

/**
 * Model
 */
class Questions extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_questions_questions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'phone' => 'required|max:30',
        'email' => 'required|email',
        'question' => 'required'
    ];
}
