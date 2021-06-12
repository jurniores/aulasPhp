<?php

require __DIR__."/vendor/autoload.php";
require __DIR__."/source/Config.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->group(null);

$router->get("/", function($data){
    response()->json(['success'=>'Deu certo']);
});

$router->dispatch();


if($router->error()){
    var_dump($router->error());
}
