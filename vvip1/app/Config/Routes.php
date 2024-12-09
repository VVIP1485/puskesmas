<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/dashboard', 'DashboardController::index'); // Menampilkan dashboard
$routes->get('login', 'LoginController::login');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('logout', 'LoginController::logout');
$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);


$routes->get('/dokter', 'DokterController::index');
$routes->get('/dokter/create', 'DokterController::create');
$routes->post('/dokter', 'DokterController::store');
$routes->get('/dokter/edit/(:num)', 'DokterController::edit/$1');
$routes->put('/dokter/update/(:num)', 'DokterController::update/$1');
$routes->get('/dokter/delete/(:num)', 'DokterController::delete/$1');

$routes->get('/pasien', 'PasienController::index');
$routes->get('/pasien/create', 'PasienController::create');
$routes->post('/pasien', 'PasienController::store');
$routes->get('/pasien/edit/(:num)', 'PasienController::edit/$1');
$routes->post('/pasien/update/(:num)', 'PasienController::update/$1');
$routes->get('/pasien/delete/(:num)', 'PasienController::delete/$1');

$routes->group('obat', function ($routes) {
    $routes->get('/', 'ObatController::index'); // Menampilkan daftar obat
    $routes->get('create', 'ObatController::create'); // Menampilkan form tambah obat
    $routes->post('store', 'ObatController::store'); // Menyimpan data obat baru
    $routes->get('edit/(:num)', 'ObatController::edit/$1'); // Menampilkan form edit obat
    $routes->post('update/(:num)', 'ObatController::update/$1'); // Memperbarui data obat
    $routes->post('delete/(:num)', 'ObatController::delete/$1'); // Menghapus data obat
});

$routes->group('pemeriksaan', function ($routes) {
    $routes->get('/', 'PemeriksaanController::index'); // Menampilkan daftar pemeriksaan
    $routes->get('create', 'PemeriksaanController::create'); // Menampilkan form tambah pemeriksaan
    $routes->post('store', 'PemeriksaanController::store'); // Menyimpan data pemeriksaan baru
    $routes->get('edit/(:num)', 'PemeriksaanController::edit/$1'); // Menampilkan form edit pemeriksaan
    $routes->post('update/(:num)', 'PemeriksaanController::update/$1'); // Memperbarui data pemeriksaan
    $routes->post('delete/(:num)', 'PemeriksaanController::delete/$1'); // Menghapus data pemeriksaan
});

$routes->group('resep', function ($routes) {
    $routes->get('/', 'ResepController::index');
    $routes->get('create', 'ResepController::create');
    $routes->post('store', 'ResepController::store');
    $routes->get('edit/(:num)', 'ResepController::edit/$1');
    $routes->post('update/(:num)', 'ResepController::update/$1');
    $routes->get('delete/(:num)', 'ResepController::delete/$1');
});

$routes->group('resepobat', function ($routes) {
    $routes->get('/', 'ResepObatController::index'); // Menampilkan daftar resep obat
    $routes->get('create', 'ResepObatController::create'); // Form tambah resep obat
    $routes->post('store', 'ResepObatController::store'); // Simpan data baru
    $routes->get('edit/(:num)', 'ResepObatController::edit/$1'); // Form edit resep obat
    $routes->post('update/(:num)', 'ResepObatController::update/$1'); // Update data
    $routes->post('delete/(:num)', 'ResepObatController::delete/$1'); // Hapus data
});

