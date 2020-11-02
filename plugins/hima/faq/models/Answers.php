<?php namespace Hima\Faq\Models;

use Model;

/**
 * Model
 */
class Answers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_faq_answers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
