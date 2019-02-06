<?php

namespace Eskju\InstagramGraph;

use Illuminate\Support\Facades\Facade;

class GoogleRecaptchaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-recaptcha';
    }
}