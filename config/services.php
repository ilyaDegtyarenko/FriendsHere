<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => '21426acecaf9178e6f34',
        'client_secret' => 'a402452f3d6962a37ff44f186e255eb4c062fb2b',
        'redirect' => 'http://friends-here.su/authorization/github/callback', //Ссылка на перенаправление при удачной авторизации (3)
    ],

//    'google' => [
//        'client_id' => '735464070638-ecnodjnribiunc7a6tkk1q2ht77jrkbg.apps.googleusercontent.com',
//        'client_secret' => 'VbEeZus4h9AmhrWpT6r4hJ5Z',
//        'redirect' => 'http://friends-here.su/authorization/google/callback',
//    ],

];
