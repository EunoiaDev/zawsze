<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Router Setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Route Definitions
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/aktiva', 'Aktiva::index');
$routes->post('/aktiva', 'Aktiva::store');
$routes->put('/aktiva/edit/(:any)', 'Aktiva::update/$1');
$routes->delete('/aktiva/(:any)', 'Aktiva::destroy/$1');

$routes->get('/transaksi', 'Transaksi::index');
$routes->post('/transaksi', 'Transaksi::create');
// $routes->resource('transaksi');
// app/Config/Routes.php
$routes->get('/transaksi/akunaktiva', 'Transaksi::akunaktiva');


// Additional Routing
// There will often be times that you need additional routing and you need it to be able to override any defaults in this file. Environment based routes is one such time. require() additional route files here to make that happen.
// You will have access to the $routes object within that file without needing to reload it.
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
