<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/Controllers/MainController.php';

$router = new AltoRouter();

$base_uri = $_SERVER['BASE_URI'];
$router->setBasePath($base_uri);

$router->map('GET', '/', ['MainController', 'homePage'],'home');
$router->map('GET', '/formations', ['MainController','formationsPage'],'formations');
$router->map('GET', '/diplomes', ['MainController','diplomesPage'],'diplomes');
$router->map('GET', '/competences', ['MainController','competencesPage'],'competences');
$router->map('GET', '/portfolio', ['MainController','portfolioPage'],'portfolio');
$router->map('GET', '/contact', ['MainController','contactPage'],'contact');
$router->map('POST', '/mail', ['MainController','mailPage'],'mail');

$match = $router->match();

if ($match == false) {

    http_response_code(404);
    echo "Not Found";
    exit;

} else {

    $target = $match['target'];
    $controllerName = $target[0];
    $methodName = $target[1];

    $controller = new $controllerName($router);

    $params = $match['params'];
    $params['base_uri'] = $base_uri;

    $controller->$methodName($params);

}

