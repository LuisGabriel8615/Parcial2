<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('inicio', 'Home::index');
$routes->get('Aplicacion', 'ProyController::Aplicaciones');
$routes->get('frameweb', 'ProyController::Frame');
$routes->get('Creditos', 'ProyController::Creditos');