<?php

namespace App\Http\Headers\Cart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cart',function (){
            return new CartService();
        });
    }
}
