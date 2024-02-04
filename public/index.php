<?php
require '../helpers.php';
$name = 'Meir';
// diese Paths sind in der Funktion basePath, in der File 'helpers.php'.
// require basePath('views/home.view.php'); // Der lange Weg
// loadView('home'); // Kurze Weg
$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php',
];

$uri = $_SERVER['REQUEST_URI'];
inspect($uri);

if(array_key_exists($uri, $routes)){
    require basePath($routes[$uri]);
}else{
    require basePath($routes['404']);
}


