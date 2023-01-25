<?php

namespace App\Notifications\Channels;

use Ghasedak\Exceptions\ApiException;
use Ghasedak\Exceptions\HttpException;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function send($notifiable,Notification $notification)
    {
        if (! method_exists($notification,'toGasdakSms')){
            throw new \Exception('toGasdakSms not found');
        }
        $data=$notification->toGasdakSms($notifiable);
        $message=$data['text'];
        $receptor= $data['phoneNumber'];

        $apikey=config('services.ghasedak.apiKey');
        try
        {
            $lineNumber = "50001212125081";
            $api = new \Ghasedak\GhasedakApi($apikey);
            $api->SendSimple($receptor,$message,$lineNumber);
        }
        catch(ApiException $e){
            throw $e;
        }
        catch(HttpException $e){
            throw $e;
        }
    }
}
