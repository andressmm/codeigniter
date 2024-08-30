<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Productos::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/crear', 'Productos::crear');
$routes->post('/productos/guardar', 'Productos::guardar');
$routes->get('/productos/ver/(:num)', 'Productos::ver/$1');