<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/user', 'User::landing');
$routes->get('/user/login', 'User::login');
$routes->get('/user/signup', 'User::signup');
$routes->get('/user/moodboard', 'User::moodBoard');
$routes->get('/landing', 'User::landing');
$routes->get('/login', 'User::login');
$routes->get('/user/roadmap', 'User::roadmap');


