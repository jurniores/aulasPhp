<?php
namespace App\controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class UserController {
    public function index(Request $req, Response $res, $args){
return  $res->getBody()->write(json_encode(["success"=>"sucessco"]));
            
    }
}