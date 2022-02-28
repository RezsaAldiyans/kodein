<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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
$routes->get('/', 'Home::index');
$routes->get('/dashboard','Home::dashboard_user');
$routes->get('/login','Home::viewLogin');
$routes->get('/register','Home::viewRegister');
$routes->post('/logins','Home::login');
$routes->post('/register','Home::register');

$routes->get('/kelas/(:any)','Home::detailsKelas/$1');
$routes->get('/materi/(:any)/(:any)','Home::mulaiKelas/$1/$2');
$routes->get('/coder','Home::viewcoder');

$routes->get('/logout','Home::logout');

//test
$routes->get('/leaderboard','Home::leaderboard');
// cek coders?
// $routes->post('/coders','Home::inCoder');

// route API untuk history
$routes->get('/ApiHistory','restfulApi::ApiHistory');

// routes admin
// $routes->get('/admin','AdminController::index');
// $routes->post('/admin/login','AdminController::login');
// $routes->get('/admin/dashboard','AdminController::dashboardAdmin');
// $routes->post('/admin/dashboard','AdminController::searchData');
// $routes->get('/admin/updateSiswa/(:any)','AdminController::updateSiswa/$1');
// $routes->post('/admin/updateSiswa/','AdminController::prosesUpdatesSiswa');
// $routes->get('/admin/deleteSiswa/(:any)','AdminController::deleteUpdatesSiswa/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
