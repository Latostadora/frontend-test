<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/products' :
        require __DIR__ . '/routes/products.php';
        break;
    case '/add-to-cart' :
        require __DIR__ . '/routes/add-to-cart.php';
        break;
    case '/' :
    case '' :
        require __DIR__ . '/index.html';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
