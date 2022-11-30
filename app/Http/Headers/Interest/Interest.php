<?php

namespace App\Http\Headers\Interest;

use App\Http\Headers\Cart\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;
use mysql_xdevapi\Collection;

/**
 * @method static Cart put(array $values,Model $object=null)
 * @method static boolean has($key)
 * @method static Collection all()
 * @method static array get($key,$modelvalue=true)
 * @method static InterestService update($key,array $value)
 * @method static \Nwidart\Modules\Collection getAll($key)
 */
class Interest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Interest';
    }
}
