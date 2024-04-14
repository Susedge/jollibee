<?php
require_once 'config.php';
require_once 'library/database.php';

$request = $_SERVER['REQUEST_URI'];

require 'library/header.php';

switch ($request) {
    case '/jollibee/':
        require __DIR__ . '/views/home.php';
        break;
    case '/jollibee/about':
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

require 'library/footer.php';
