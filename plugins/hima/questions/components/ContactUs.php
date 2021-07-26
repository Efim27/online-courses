<?php namespace Hima\Questions\Components;

use Cms\Classes\ComponentBase;
use Hima\Questions\Models\Questions;
use Symfony\Component\Console\Question\Question;

class ContactUs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Форма',
            'description' => 'Форма для вопросов'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onAddQuestion()
    {
        $question = new Questions;
        $question->phone = post('phone');
        $question->email = post('email');
        $question->question = post('question');
        $status = $question->save();

        $this->page['status'] = $status;
    }
}
