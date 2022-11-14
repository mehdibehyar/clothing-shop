<?php

namespace App\Http\Headers\Notify;

use Illuminate\Support\Facades\Facade;

/**
 * @method static notifyCode(string $receptor,integer $code)
 */

class Notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Notify';
    }
}
