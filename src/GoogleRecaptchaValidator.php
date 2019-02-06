<?php

namespace Eskju\GoogleRecaptcha;

use GuzzleHttp\Client;

class GoogleRecaptchaValidator
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(config('google-recaptcha.host'),
            [
                'form_params' =>
                    [
                        'secret' => config('google-recaptcha.secret'),
                        'response' => $value
                    ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}