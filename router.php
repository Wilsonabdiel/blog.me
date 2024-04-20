<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/blog.me/' => 'controllers/index.php',
    '/blog.me/about'=> 'controllers/about.php',
    '/post' => 'controllers/post.php',
    '/posts/create' => 'controllers/post-create.php',
];

function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
        abort();
    }
}

function  abort($code =404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);