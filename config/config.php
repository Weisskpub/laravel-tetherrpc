<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Tether Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('TETHERD_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Tether Core is running at.
    |
    | If Tether Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Tether Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your bitcoin.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('TETHERD_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Tether Core is listening for JSON-RPC connections.
    | Default is 8332 for mainnet and 8332 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to bitcoin.conf file.
    |
    */

    'port' => env('TETHERD_PORT', 8332),

    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in bitcoin.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('TETHERD_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in bitcoin.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('TETHERD_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Tetherd JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Tether Core
    | you can specify custom ca package to verify against.
    | Note that using Tether JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
