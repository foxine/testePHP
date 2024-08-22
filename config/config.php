<?php

return [
    'app' => [
        'name' => getenv('APP_NAME'),
        'env' => getenv('APP_ENV'),
        'debug' => getenv('APP_DEBUG'),
        'url' => getenv('APP_URL'),
    ],
    'database' => [
        'driver' => getenv('DB_CONNECTION'),
        'host' => getenv('DB_HOST'),
        'port' => getenv('DB_PORT'),
        'database' => getenv('DB_DATABASE'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
    ],
    'api' => [
        'host' => getenv('API_HOST'),
        'token' => getenv('API_TOKEN'),
    ],
];
