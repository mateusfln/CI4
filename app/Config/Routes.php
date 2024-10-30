<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tasks', 'Task::index');
$routes->get('/tasks/create', 'Task::create');
$routes->post('/tasks/store', 'Task::store');
$routes->get('/tasks/update/(:num)', 'Task::update/$1');
$routes->get('/tasks/delete/(:num)', 'Task::delete/$1');
