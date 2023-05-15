<?php

namespace Misfit\Robisms;

use Illuminate\Support\ServiceProvider;

class RobiSmsServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config' => base_path('config')
        ]);
    }

    public function register()
    {
        $this->app->bind('RobiSms', function(){
            return new RobiSms;
        });
        // if (file_exists($file = app_path('../package/robisms/src/helpers.php'))) {
        //     require $file;
        // }
    }
}
