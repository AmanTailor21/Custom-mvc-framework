<?php
include_once 'core.php';
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        require __DIR__ . '../views/index.php';
        break;
    case '/home' :
        require __DIR__ . '../views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '../views/404.php';
        break;
}