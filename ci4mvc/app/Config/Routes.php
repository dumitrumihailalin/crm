<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/signup', 'SignupController::new');
$routes->post('/signup/create', 'SignupController::create');
$routes->get('/', 'User\UserController::login');
$routes->get('/login', 'User\UserController::login');
$routes->post('login', 'User\UserController::validateLogin');
$routes->get('/logout', 'User\UserController::delete');

$routes->get('/admin', 'Admin\AdminController::index', ['filter' => 'login']);
// devices list
$routes->get('/devices', 'Devices\AdminDevicesController::index');
$routes->get('/devices/search', 'Devices\AdminDevicesController::search');
$routes->get('/devices/add', 'Devices\AdminDevicesController::add');
$routes->get('/devices/edit/(:num)', 'Devices\AdminDevicesController::edit');
$routes->get('/devices/new', 'Devices\AdminDevicesController::new');
$routes->post('/devices/store', 'Devices\AdminDevicesController::store');
$routes->post('/devices/update', 'Devices\AdminDevicesController::update');
$routes->get('/devices/pdf/(:num)', 'Devices\AdminDevicesController::pdf');



// customers
$routes->get('/customers', 'Customers\CustomersController::index');
$routes->get('/customers/add', 'Customers\CustomersController::add');
$routes->post('/customers/save', 'Customers\CustomersController::store');
$routes->get('/customers/search', 'Customers\CustomersController::search');

// settings
$routes->get('/settings', 'Settings\SettingsController::index');

// categories
$routes->get('/categories', 'Categories\CategoriesController::index');
$routes->get('/categories/add', 'Categories\CategoriesController::add');
$routes->post('/categories/save', 'Categories\CategoriesController::store');
$routes->get('/categories/edit/(:num)', 'Categories\CategoriesController::edit/$1');
$routes->post('/categories/update', 'Categories\CategoriesController::update');
$routes->get('/categories/delete/(:num)', 'Categories\CategoriesController::delete/$1');

// statuses
$routes->get('/statuses', 'Statuses\StatusesController::index');
$routes->get('/statuses/add', 'Statuses\StatusesController::add');
$routes->post('/statuses/save', 'Statuses\StatusesController::store');
$routes->get('/statuses/edit/(:num)', 'Statuses\StatusesController::edit/$1');
$routes->post('/statuses/update', 'Statuses\StatusesController::update');
$routes->get('/statuses/delete/(:num)', 'Statuses\StatusesController::delete/$1');
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
