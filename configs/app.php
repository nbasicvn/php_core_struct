<?php

return [
    'app' => [
        'env' => $_ENV['APP_ENV'] ?? 'production',
        'debug' => $_ENV['APP_DEBUG'] ?? false,
    ],
    'db' => [
        'host' => $_ENV['DB_HOST'] ?? '',
        'port' => $_ENV['DB_PORT'] ?? '',
        'username' => $_ENV['DB_USERNAME'] ?? '',
        'password' => $_ENV['DB_PASSWORD'] ?? '',
        'database' => $_ENV['DB_DATABASE'] ?? '',
    ]
];