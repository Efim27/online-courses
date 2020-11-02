<?php namespace Hima\News\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_news_news';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
