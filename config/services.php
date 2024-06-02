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

    'linkedin-openid' => [
        'client_id' => '77g51kc6xcz70y',
        'client_secret' => 'WPL_AP0.KMe0jWiQJQ458012.OTc0NDAzMjk0',
        'redirect' => 'http://127.0.0.1:8000/linkedin/callback',
    ],

    'facebook' => [
        'client_id' => '756155420048873',
        'client_secret' => '8c9848cc40f658580f5127662891c4d2',
        'redirect' => 'https://7aa0-223-123-14-95.ngrok-free.app/facebook/callback',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
