<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1637569489847531',
        'client_secret' => '51264559b744cb6e3888227871d27552',
        'redirect' => 'http://128.199.207.171/profile1/facebook/callback',
    ],

    'google' => [
        'client_id' => '665060432231-ilqnk6urd1s7jkrg9006nvunvmm6a9up.apps.googleusercontent.com',
        'client_secret' => 'szmXiEVpaWNiyF7vLF_X1d0i',
        'redirect' => 'http://128.199.207.171/profile1/google/callback'
    ],
];
