<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/user', 'User::landing');
$routes->get('/', 'Home::index');

