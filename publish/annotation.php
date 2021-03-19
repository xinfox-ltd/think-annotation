<?php

return [
    'inject' => [
        'enable'     => true,
        'namespaces' => [],
    ],
    'route'  => [
        'enable'      => true,
        'controllers' => [],
        'auth' => [
            'enable' => false,
            'middleware' => null
        ]
    ],
    'model'  => [
        'enable' => true,
    ],
    'ignore' => [],
    'store'  => null,//缓存store
];
