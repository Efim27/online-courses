<?php namespace Hima\Yandexkassa\Models;

use Config;
use Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

/**
 * Model
 */
class Settings extends Model
{
    use ValidationTrait;

    public $implement = [
        \System\Behaviors\SettingsModel::class
    ];

    public $settingsCode = 'hima_yandexkassa_settings';
    public $settingsFields = 'fields.yaml';
    public $rules = [];
}
