<?php namespace Hima\Questions;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Hima\Questions\Components\ContactUs' => 'ContactUs'
        ];
    }

    public function registerSettings()
    {
    }
}
