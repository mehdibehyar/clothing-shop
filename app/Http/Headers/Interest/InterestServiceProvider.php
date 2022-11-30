<?php

namespace App\Http\Headers\Interest;

use Illuminate\Support\ServiceProvider;

class InterestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Interest',function (){
            return new InterestService();
        });
    }
}
