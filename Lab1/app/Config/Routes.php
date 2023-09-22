<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::students');
$routes->get('students', 'MainController::students');
$routes->post('save', 'MainController::save');
$routes->get('edit/(:any)', 'MainController::edit/$1');
$routes->get('delete/(:any)' , 'MainController::delete/$1');

