<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

//usuario
$router->get('/novo', 'UsuariosController@index');
$router->post('/novo', 'UsuariosController@create');

$router->get('/usuario/{id}/edit', 'UsuariosController@edit');
$router->post('/usuario/{id}', 'UsuariosController@editAction');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');

