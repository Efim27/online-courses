<?php namespace Hima\Yandexkassa;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Hima\YandexKassa\Components\YandexKassa' => 'YandexKassa'
        ];
    }

    public function registerSettings()
    {
        return [
            'options' => [
                'label'       => 'Яндекс Касса',
                'description' => 'Ключи API и настройки',
                'icon'        => 'icon-money',
                'class' => 'Hima\Yandexkassa\Models\Settings',
                'order' => 700,
                'category'    => 'API'
            ]
        ];
    }
}
