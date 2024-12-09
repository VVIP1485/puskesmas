<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/matches', 'MatchController::index');
$routes->get('/matches/create', 'MatchController::create');
$routes->post('/matches', 'MatchController::store');
$routes->get('/matches/edit/(:num)', 'MatchController::edit/$1');
$routes->post('/matches/update/(:num)', 'MatchController::update/$1');
$routes->get('/matches/delete/(:num)', 'MatchController::delete/$1');