<?php

namespace App\Http\Headers\Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;
use mysql_xdevapi\Collection;

/**
 * @method static Cart put(array $value,Model $object=null)
 * @method static boolean has($key)
 * @method static Collection all()
 * @method static array get($key,$modelvalue=true)
 * @method static Cart update($key,$value)
 */



class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
