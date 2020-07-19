<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Gempa');
$routes->setDefaultMethod('m_5_terkini');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// GEMPA
$routes->get('/', 'Gempa::m_5_terkini');
$routes->get('gempa', 'Gempa::m_5_terkini');
$routes->get('gempa/m-5-terkini', 'Gempa::m_5_terkini');
$routes->get('/gempa/m-5', 'Gempa::m_5');
$routes->get('/gempa/dirasakan', 'Gempa::dirasakan');
$routes->get('gempa/api-endpoint', 'Gempa::api_endpoint');

// API V1
$routes->get('api/v1/gempa/m-5-terkini', 'ApiV1::gempa_m_5_terkini');
$routes->get('api/v1/gempa/m-5', 'ApiV1::gempa_m_5');
$routes->get('api/v1/gempa/dirasakan', 'ApiV1::gempa_dirasakan');
$routes->get('api/v1/gempa/tsunami-terkini', 'ApiV1::gempa_tsunami_terkini');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
