<?php

namespace App\Http\Headers\Notify;

use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Notify',function (){
            return new NotifyService();
        });
    }
}
