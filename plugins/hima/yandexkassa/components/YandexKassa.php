<?php namespace Hima\YandexKassa\Components;

require dirname(__DIR__, 1).'/vendor/yandex-checkout-sdk-php-master/autoload.php';

use Cms\Classes\ComponentBase;
use Hima\Yandexkassa\Models\Settings;
use Hima\Courses\Models\Course;
use Auth;
use Request;
use Response;
use YandexCheckout\Client;

class YandexKassa extends ComponentBase
{
    public $secret_key = Settings::get('secret_key');
    public $shop_id = Settings::get('shop_id');

    public function componentDetails()
    {
        return [
            'name'        => 'Форма оплаты',
            'description' => 'Форма оплаты Yandex Kassa'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        if (empty($this->secret_key) || empty($this->shop_id)) {
            return Response::make('Ошибка Яндекс Кассы!<br> Значения <b>secret_key</b> или <b>shop_id</b> пустые. Определите их в настройках.', 500);
        }

        $course_slug =  $this->property('course_slug');
        $course = Course::where('slug', '=', $course_slug)->first();
        $user = Auth::getUser();

        $timestamp = time();
        $domain = Request::root();

        $yak_client = new Client();
        dump($this->secret_key);
        dump($this->shop_id);
        die();
        $yak_client->setAuth($this->secret_key, $this->shop_id);
        $yak_id_key = uniqid("{$course->id} {$user->id} $timestamp", true);

        $payment = $yak_client->createPayment(
            array(
                'amount' => array(
                    'value' => $course->price,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => "$domain/courses",
                ),
                'capture' => true,
                'description' => "Курс: \"{$course->title}\"",
            ),
            $yak_id_key
        );

        dump($payment);
        exit();
    }
}
