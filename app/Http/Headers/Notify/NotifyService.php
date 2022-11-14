<?php

namespace App\Http\Headers\Notify;

class NotifyService
{

    public function notifyCode($receptor,$code)
    {
        try
        {

            $lineNumber = "50001212125081";
            $api = new \Ghasedak\GhasedakApi(config('services.ghasedak.apiKey'));
            $api->SendSimple($receptor,"وبسایت فروشگاه لباس dressland " . "\n" . "کد احراز هویت:" .$code,$lineNumber);
        }
        catch(\Ghasedak\Exceptions\ApiException $e){
            throw $e;
        }
        catch(\Ghasedak\Exceptions\HttpException $e){
            throw $e;
        }
    }
}
