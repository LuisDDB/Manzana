<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/**
 * get('ruta_web ', controlador::funcion )
 */
$routes->get('/', 'Home::index');

$routes->get('/saludar', 'Home::saludar');

$routes->get('/saludar/(:alpha)', 'Home::saludar2/$1');

$routes->get('/saludar/(:alpha)/(:num)', 'Home::saludar3/$1/$2');

$routes->get('/operaciones/(:num)/(:num)/(:alpha)',
 'Home::operaciones/$1/$2/$3');


$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/(:num)', 'UsuarioController::show/$1');
$routes->get('/usuarios/create', 'UsuarioController::create');
$routes->post('/usuarios/store', 'UsuarioController::store');
$routes->get('/usuarios/(:num)/edit', 'UsuarioController::edit/$1');
$routes->post('/usuarios/(:num)/update', 'UsuarioController::update/$1');
$routes->get('/usuarios/(:num)/delete', 'UsuarioController::delete/$1');


/*Home plantilla*/
$routes->get('/plantilla', 'Home::plantilla');




/*
(:any) -> Cualquier cosas, caracteres, numeros, symbolos y varios cosas
(:segment) -> Es lo mismo pero solo permite enviar una sola variable
(:num) -> numero positivos o negativos
(:alpha) -> Puros caracteres mayusculas y minuscula
(:alphanum) -> Caracteres y numeros
*/

