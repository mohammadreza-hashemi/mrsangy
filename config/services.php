<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' =>[
        'client_id' =>'ede1289acc87630481da',
        'client_secret'=>'84a12f38ca5c69fef097da128c2183601fb2edcf',
        'redirect'=>'http://localhost:8000/login/github/callback',
    ],
    'google'=>[
        'client_id'=>'265447426286-f1j18srv884j4m38g6v1t5a1pj7sk30t.apps.googleusercontent.com',
        'client_secret'=>'XtlOQ78sjEfCOfXFRAVVV9BL',
        'redirect'=>'http://localhost:8000/login/google/callback',
    ],
    'recaptcha'=>[
        'secret'=>env('RECAPTCHA_SECRET'),
      ]

];
