<?php

namespace Eskju\GoogleRecaptcha;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;

class GoogleRecaptchaServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind('google-recaptcha', function () {
            return new GoogleRecaptcha();
        });
    }

    public function boot()
    {
        Validator::extend('recaptcha', 'Eskju\\GoogleRecaptcha\\GoogleRecaptchaValidator@validate');

    }
}