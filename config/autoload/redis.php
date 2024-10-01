<?php

declare(strict_types=1);
use function Hyperf\Support\env;

// host: string. can be a host, or the path to a unix domain socket.
// port: int (default is 6379, should be -1 for unix domain socket)
// timeout: float, value in seconds (default is 0 meaning unlimited)
// retryInterval: int, value in milliseconds (optional)
// readTimeout: float, value in seconds (default is 0 meaning unlimited)
// persistent: mixed, if value is string then it used as persistend id, else value casts to boolean
// auth: mixed, authentication information
// ssl: array, SSL context options

return [
    'default' => [
        'host' => env('REDIS_HOST', 'localhost'),
        'auth' => env('REDIS_AUTH', null),
        'port' => (int) env('REDIS_PORT', 6379),
        'db' => (int) env('REDIS_DB', 0),
        'timeout' => 0.5,
        'reserved' => null,
        'retry_interval' => 1,
        'read_timeout' => 0.5,
        'cluster' => [
            'enable' => (bool) env('REDIS_CLUSTER_ENABLE', false),
            'name' => null,
            'seeds' => [],
        ],
        'sentinel' => [
            'enable' => (bool) env('REDIS_SENTINEL_ENABLE', false),
            'master_name' => env('REDIS_MASTER_NAME', 'mymaster'),
            'nodes' => explode(';', env('REDIS_SENTINEL_NODE', '')),
            'persistent' => '',
            'read_timeout' => 0,
            'auth' => env('REDIS_SENTINEL_PASSWORD', ''),
        ],
        'pool' => [
            'min_connections' => 1,
            'max_connections' => 10,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => (float) env('REDIS_MAX_IDLE_TIME', 60),
        ],
        'options' => [
            'prefix' => env('REDIS_PREFIX', ''),
        ],
    ],
];

// <?php
// return [
//     'default' => [
//         'host' => env('REDIS_HOST', 'localhost'),
//         'auth' => env('REDIS_AUTH', ''),
//         'port' => (int) env('REDIS_PORT', 6379),
//         'db' => (int) env('REDIS_DB', 0),
//         'cluster' => [
//             'enable' => (bool) env('REDIS_CLUSTER_ENABLE', false),
//             'name' => null,
//             'seeds' => [],
//         ],
//         'pool' => [
//             'min_connections' => 1,
//             'max_connections' => 10,
//             'connect_timeout' => 10.0,
//             'wait_timeout' => 3.0,
//             'heartbeat' => -1,
//             'max_idle_time' => (float) env('REDIS_MAX_IDLE_TIME', 60),
//         ],
//         'options' => [ // Options of Redis Client, see https://github.com/phpredis/phpredis#setoption
//             \Redis::OPT_PREFIX => env('REDIS_PREFIX', ''),
//             // or 'prefix' => env('REDIS_PREFIX', ''), v3.0.38 or later
//         ],
//     ],
// ];
