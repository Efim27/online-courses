<?php namespace Hima\News\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $attachOne = [
        'attachment' => ['System\Models\File']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hima_news_news';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function previousRecord() {
        $previousRecord = News::where('id', '<>', $this->id)->where('id','<', $this->id)->orderBy('id', 'DESC')->first();
        return $previousRecord;
    }

    public function nextRecord() {
        $nextRecord = News::where('id', '<>', $this->id)->where('id','>', $this->id)->orderBy('id', 'ASC')->first();
        return $nextRecord;
    }
}
