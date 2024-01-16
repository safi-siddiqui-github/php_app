<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$proxy = '/php_app';

$routes = [
    "/" => "./controllers/index.php",
];


if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require "./controllers/404.php";
}