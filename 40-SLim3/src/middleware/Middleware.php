<?php

namespace App\middleware;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class Middleware {
     
    public function allRoutes(Request $req, Response $res, $next) {
            $response = $next($req, $res);
            return $response
                    ->withHeader('Access-Control-Allow-Origin', '*')
                    ->withHeadeR('Content-Type','application/json; charset=utf-8')
                    ->withHeader('Access-Control-Allow-Headers', '*')
                    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
                    ->withHeadeR("Access-Control-Max-Age","86400");
        }
    

}