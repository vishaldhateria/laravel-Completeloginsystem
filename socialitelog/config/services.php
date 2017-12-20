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
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
      'client_id' => 'u7oAXWF2X6p91vXjjPJf00eQa',
      'client_secret' => 'ewpsJzstLG4Wljoo6vuJzD4RfYIQ6by3hd84CivwtjR4jGgnuz',
      'redirect' => 'http://laravel.vsdeveloper.in/login/twitter/callback'
    ],
    
    'facebook' => [
      'client_id' => '195161731052361',
      'client_secret' => '22e15fc0294f29a8963d2c3753f366e9',
      'redirect' => 'http://laravel.vsdeveloper.in/login/facebook/callback'
    ],
    
    'google' => [
      'client_id' => '770080287332-q0k6vfa9a7qm3kingil84eia0iipfu2r.apps.googleusercontent.com',
      'client_secret' => 'ZEygEYiMu7wpu-uw0fwTrc8I',
      'redirect' => 'http://laravel.vsdeveloper.in/login/google/callback'
    ],

     'linkedin' => [
      'client_id' => '81mcm0v2sqa40q',
      'client_secret' => 's2i58qvAXXoFwhPh',
      'redirect' => 'http://laravel.vsdeveloper.in/login/linkedin/callback'
    ],
];
