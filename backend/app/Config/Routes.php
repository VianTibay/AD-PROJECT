<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'users::index');
$routes->get('/', 'Home::index');
