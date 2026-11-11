<?php

$storage = '/tmp/storage';
foreach (['app/public', 'framework/cache/data', 'framework/sessions', 'framework/views', 'logs'] as $dir) {
    if (!is_dir("$storage/$dir")) {
        mkdir("$storage/$dir", 0777, true);
    }
}

$vars = [
    'LARAVEL_STORAGE_PATH' => $storage,
    'APP_SERVICES_CACHE'   => '/tmp/services.php',
    'APP_PACKAGES_CACHE'   => '/tmp/packages.php',
    'APP_CONFIG_CACHE'     => '/tmp/config.php',
    'APP_ROUTES_CACHE'     => '/tmp/routes.php',
    'APP_EVENTS_CACHE'     => '/tmp/events.php',
];

foreach ($vars as $key => $value) {
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
    putenv("$key=$value");
}

require __DIR__ . '/../public/index.php';

