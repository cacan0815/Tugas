<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get( '/', 'Home::index');
$routes->get( '/catalog', 'Home::catalog');
$routes->get( '/catalog/snack', 'Home::snack');
$routes->get( '/catalog/flower', 'Home::flower');
$routes->get( '/catalog/money', 'Home::money');
$routes->get( '/pay', 'Home::pay');
$routes->get( '/about', 'Home::about');
$routes->post('/form/store', 'FormController::store');
$routes->setAutoRoute(true);
