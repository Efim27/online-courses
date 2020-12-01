<?php

require __DIR__.'/vendor/yandex-checkout-sdk-php-master/autoload.php';

use Zen\Robots\Controllers\Generate;
use Hima\Courses\Models\Course;
use Response;

use YandexCheckout\Model\Notification\NotificationSucceeded;
use YandexCheckout\Model\Notification\NotificationWaitingForCapture;
use YandexCheckout\Model\NotificationEventType;
use YandexCheckout\Model\PaymentStatus;

Route::post('/yandex_kassa', function () {
    $source = file_get_contents('php://input');
    $requestBody = json_decode($source, true);

    try {
        $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
        ? new NotificationSucceeded($requestBody)
        : new NotificationWaitingForCapture($requestBody);
    } catch (Exception $e) {
        return Response::make('Error', 500);
    }

    $payment = $notification->getObject();
    if($payment->getStatus() === PaymentStatus::SUCCEEDED) {
        $course = Course::find($payment->metadata['course_id']);
        $user_id = (int) $payment->metadata['user_id'];
        file_put_contents('log1', print_r($user_id ,true), FILE_APPEND);
        $user = User::find($user_id);
        file_put_contents('log1', print_r($user ,true), FILE_APPEND);
        $user->courses->attach($course);
        return Response::make('Ok', 200);
    }
});