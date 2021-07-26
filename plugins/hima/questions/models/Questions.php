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
        'phone' => ['required', 'regex:/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/'],
        'email' => 'required|email',
        'question' => 'required|max:3000'
    ];

    public $customMessages = [
        'email.required' => 'Поле "E-mail" обязательно для заполнения',
        'email.between' => 'Поле "E-mail" должно содержать от 2 до 255 символов',
        'email.email' => 'Поле "E-mail" имеет неверный формат',
        'question.required' => 'Поле "Вопрос" обязательно для заполнения',
        'question.max' => 'Поле "Вопрос" должно содержать не более 3000 символов',
        'phone.required' => 'Поле "Телефон" обязательно для заполнения',
        'phone.regex' => 'Поле "Телефон" имеет неверный формат',
    ];
}
