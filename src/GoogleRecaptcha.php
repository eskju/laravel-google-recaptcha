<?php

namespace Eskju\GoogleRecaptcha;

class GoogleRecaptcha
{
    public static function show()
    {
        if (empty(config('google-recaptcha.key'))) {
            throw new Exception('You did not specify a Google ReCaptcha key.');
        }

        return '<div class="g-recaptcha" data-sitekey="' . config('google-recaptcha.key') . '"></div>';
    }

    public static function js()
    {
        return '<script src="https://www.google.com/recaptcha/api.js"></script>';
    }
}