<?php
require 'src/config/Config.php';

use App\controllers\UserController;
use App\middleware\Middleware;
use Slim\Http\Request;
use Slim\Http\Response;

$configureError = new \Slim\Container($configuration);


$app = new \Slim\App($configureError);


$app->get('/', function (Request $req, Response $res, $args) {

    $res->getBody()->write(json_encode(['Teste' => 'Testando']));

    return $res->withAddedHeader('Content-Type', 'application/json; charset=utf-8')
        ->withAddedHeader('Access-Control-Allow-Headers', '*')
        ->withAddedHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
        ->withAddedHeader('Access-Control-Allow-Origin', '*');
});

$app->run();
