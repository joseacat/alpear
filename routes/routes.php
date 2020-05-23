<?php

$controllersPath = 'App\Controllers\\';

@include('routes/web.php');

$url = $_SERVER['REQUEST_URI'];

if (array_key_exists($url, $routes)){
    $targetMethod = $routes[$url];
}else{
    http_response_code(404);
    @include('resources/views/errors/404.php');
    die();
}

[$controller, $method] = explode('@', $targetMethod);

$class = "{$controllersPath}{$controller}";

extract((new $class)->{$method}());

