<?php

use Illuminate\Support\Facades\Config;

return [

    /*
    |--------------------------------------------------------------------------
    | User model (for executor relation on Revision model).
    |--------------------------------------------------------------------------
    |
    | By default the App\User model
    */
    'usermodel' => Config::get('auth.providers.users.model'),

    /*
    |--------------------------------------------------------------------------
    | User provider (auth) implementation.
    |--------------------------------------------------------------------------
    |
    | By default Laravel generic Illuminate\Auth\Guard.
    |
    | Supported options:
    |  - illuminate
    |  - sentry
    |  - sentinel
    |  - jwt-auth
    |  - session
    */
    'userprovider' => 'illuminate',


    /*
    |--------------------------------------------------------------------------
    | User field to be saved as the author of tracked action.
    |--------------------------------------------------------------------------
    |
    | By default:
    |
    |  - id for illuminate
    |  - login field (email) for sentry/sentinel
    */
    'userfield' => 'id',


    /*
    |--------------------------------------------------------------------------
    | Table used for the revisions.
    |--------------------------------------------------------------------------
    */
    'table' => 'revisions',


    /*
    |--------------------------------------------------------------------------
    | Database connection used for the revisions.
    |--------------------------------------------------------------------------
    */
    'connection' => null,


    /*
    |--------------------------------------------------------------------------
    | Further configuration settings
    |--------------------------------------------------------------------------
    */
    'revisions' => [
        'limit' => 20,
        'limitCleanup' => false,
    ],


    /*
    |--------------------------------------------------------------------------
    | rollback configuration settings
    |--------------------------------------------------------------------------
    */
    'rollback' => [
        'cleanup' => false,
    ],

];

