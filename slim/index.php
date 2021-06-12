<?php

require __DIR__."/vendor/autoload.php";

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app = new \Slim\App();
$app->add(new \Tuupola\Middleware\CorsMiddleware([
    "origin" => ["*"],
    "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE"],
    "headers.allow" => ["Authorization", "If-Match", "If-Unmodified-Since"],
    "headers.expose" => ["Etag"],
    "credentials" => true,
    "cache" => 86400
]));


$app->get('/', function (Request $req, Response $res, $args = []) {
     $res->withHeader('Access-Control-Allow-Origin', '*');
     return     $res->withStatus(200)->withJson(['Teste'=>'Bom dia']);

});


$app->run();

