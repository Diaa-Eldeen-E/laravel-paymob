<?php


return [

    /*
    |--------------------------------------------------------------------------
    | PayMob Default Order Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default Order model.
    |
    */

    'order' => [
        'model' => 'App\Models\Order'
    ],

    /*
    |--------------------------------------------------------------------------
    | PayMob token and merchant_id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob token and merchant_id to make your requests.
    |
    */

    'token' => '',
    'merchant_id' => '',

    /*
    |--------------------------------------------------------------------------
    | PayMob api_key
    |--------------------------------------------------------------------------
    |
    | This is your PayMob api_key make auth request.
    |
    */

    'api_key' => '',

    /*
    |--------------------------------------------------------------------------
    | PayMob integration id and iframe id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob integration id and iframe id.
    |
    */

    'integration_id' => '',
    'iframe_id' => '',
];
