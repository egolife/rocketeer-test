<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | HipChat API Token
    |--------------------------------------------------------------------------
    |
    | Required API Token from HipChat
    |
    */
    'api_token' => 'e84d37e6d5f64146aa4d37b4594558',


    /*
    |--------------------------------------------------------------------------
    | HipChat API App Name
    |--------------------------------------------------------------------------
    |
    | Choose a name you want to be displayed on HipChat
    | Length: from 1 to 15 characters
    */
    'app_name' => 'Rocketeer app',


    /*
    |--------------------------------------------------------------------------
    | HipChat Default Room
    |--------------------------------------------------------------------------
    |
    | If Not specified, you will have to always use
    | HipChat::setRoom('roomName');
    | when a room name is required
    |
    */
    'default_room' => 'dev', // this is optional
);
