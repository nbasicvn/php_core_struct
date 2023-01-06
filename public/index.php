<?php

require __DIR__ . '/../vendor/autoload.php';
define('BASE_PATH', realpath(__DIR__ . '/..'));
define('APP_PATH', realpath(__DIR__ . '/../app'));

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
include BASE_PATH . '/bootstrap/app.php';

$path = $_GET['_url'] ?? '/';

try {
    if ($path == '/') {
        $controller = new \App\Controllers\HomeController();
        $controller->index();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
