<?php

namespace App\Http\Headers\Notify;

class NotifyService
{

    public function notifyCode($receptor,$code,$path)
    {
        try
        {

            $lineNumber = "50001212125081";
            $api = new \Ghasedak\GhasedakApi(config('services.ghasedak.apiKey'));
            $api->SendSimple($receptor,"وبسایت فروشگاه لباس dressland " . "\n" . "کد احراز هویت:" .$code,$lineNumber);
        }
        catch(\Ghasedak\Exceptions\ApiException $e){
            alert()->error('ناموفق','مشکلی پیش آمده لطفا با پشتیبانی تماس بگیرید.');
            return redirect(route($path));
        }
        catch(\Ghasedak\Exceptions\HttpException $e){
            alert()->error('ناموفق','مشکلی پیش آمده لطفا با پشتیبانی تماس بگیرید.');
            return redirect(route($path));
        }
    }
}
