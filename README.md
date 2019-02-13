# laravel-google-recaptcha
ReCaptcha for Laravel

Features:
- easy Google ReCaptcha (v2) integration via Facade
- simple Validator for your own ruleset

## Usage

```
composer require eskju/laravel-google-recaptcha
```

## Publish config and edit .env
```
php artisan vendor:publish --provider="Eskju\GoogleRecaptcha\GoogleRecaptchaServiceProvider" --tag="config"
```

Add Google ReCaptcha credentials to your .env file:
(You cam obtain your key here: https://www.google.com/recaptcha/intro/v3.html, select Version 2)
```
GOOGLE_RECAPTCHA_KEY=
GOOGLE_RECAPTCHA_SECRET=
``` 

## Usage

Add the following snippet to your (form) template:

```
{{ GoogleRecaptcha::show() }}
{{ GoogleRecaptcha::js() }}
```

Add a new rule to your validation:
```
'g-recaptcha-response' => 'required|recaptcha'
```