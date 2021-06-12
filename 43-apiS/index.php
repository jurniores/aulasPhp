<?php
session_start();


require 'vendor/autoload.php';
require 'src/routes.php';

$router->run( $router->routes );

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: GET, post, PUT, DELTE, OPTIONS');
exit;



