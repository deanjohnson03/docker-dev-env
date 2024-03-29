<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

error_reporting(E_ALL ^ E_DEPRECATED);

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/', function (Request $request, Response $response, array $args) {
    return "App Started... Use /hello/{name}";
});

$app->run();
