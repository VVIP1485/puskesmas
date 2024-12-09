<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/authenticate', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'authGuard']);

// Route untuk tournaments
$routes->get('/tournaments', 'TournamentController::index', ['as' => 'tournaments.index']);
$routes->get('/tournaments/create', 'TournamentController::create');
$routes->post('/tournaments/store', 'TournamentController::store');
$routes->get('/tournaments/edit/(:num)', 'TournamentController::edit/$1');
$routes->post('/tournaments/update/(:num)', 'TournamentController::update/$1');
$routes->get('/tournaments/show/(:num)', 'TournamentController::show/$1');
$routes->get('/tournaments/delete/(:num)', 'TournamentController::delete/$1');

// Route untuk matches
$routes->get('/matches', 'MatchController::index', ['as' => 'matches.index']);
$routes->get('/matches/create', 'MatchController::create');
$routes->post('/matches/store', 'MatchController::store');
$routes->get('/matches/edit/(:num)', 'MatchController::edit/$1');
$routes->post('/matches/update/(:num)', 'MatchController::update/$1');
$routes->get('/matches/show/(:num)', 'MatchController::show/$1');
$routes->get('/matches/delete/(:num)', 'MatchController::delete/$1');


    $routes->group('players', function($routes) {
    $routes->get('/', 'PlayerController::index', ['as' => 'players.index']);
    $routes->get('create', 'PlayerController::create', ['as' => 'players.create']);
    $routes->post('store', 'PlayerController::store', ['as' => 'players.store']);
    $routes->get('edit/(:num)', 'PlayerController::edit/$1', ['as' => 'players.edit']);
    $routes->post('update/(:num)', 'PlayerController::update/$1', ['as' => 'players.update']);
    $routes->get('delete/(:num)', 'PlayerController::delete/$1', ['as' => 'players.delete']);
});
$routes->group('venues', function($routes) {
    $routes->get('/', 'VenueController::index', ['as' => 'venues.index']);
    $routes->get('create', 'VenueController::create', ['as' => 'venues.create']);
    $routes->post('store', 'VenueController::store', ['as' => 'venues.store']);
    $routes->get('edit/(:num)', 'VenueController::edit/$1', ['as' => 'venues.edit']);
    $routes->post('update/(:num)', 'VenueController::update/$1', ['as' => 'venues.update']);
    $routes->get('delete/(:num)', 'VenueController::delete/$1', ['as' => 'venues.delete']);
});
$routes->group('scores', function($routes) {
    $routes->get('/', 'ScoreController::index', ['as' => 'scores.index']);
    $routes->get('create', 'ScoreController::create', ['as' => 'scores.create']);
    $routes->post('store', 'ScoreController::store', ['as' => 'scores.store']);
    $routes->get('edit/(:num)', 'ScoreController::edit/$1', ['as' => 'scores.edit']);
    $routes->post('update/(:num)', 'ScoreController::update/$1', ['as' => 'scores.update']);
    $routes->get('delete/(:num)', 'ScoreController::delete/$1', ['as' => 'scores.delete']);
});
$routes->group('teams', function($routes) {
    $routes->get('/', 'TeamController::index', ['as' => 'teams.index']);
    $routes->get('create', 'TeamController::create', ['as' => 'teams.create']);
    $routes->post('store', 'TeamController::store', ['as' => 'teams.store']);
    $routes->get('edit/(:num)', 'TeamController::edit/$1', ['as' => 'teams.edit']);
    $routes->post('update/(:num)', 'TeamController::update/$1', ['as' => 'teams.update']);
    $routes->get('show/(:num)', 'TeamController::show/$1', ['as' => 'teams.show']);
    $routes->get('delete/(:num)', 'TeamController::delete/$1', ['as' => 'teams.delete']);
});
