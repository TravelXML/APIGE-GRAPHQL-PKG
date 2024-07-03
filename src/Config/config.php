<?php

return [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'your_database',
        'username' => 'your_username',
        'password' => 'your_password',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],
    'jwt' => [
        'secret_key' => 'your_secret_key'
    ],
    'rate_limiting' => [
        'limit' => 100,
        'interval' => '1 minute'
    ]
];




?>