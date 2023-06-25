<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->get('/', 'Home::index');

//Guest Book User
$routes->get('/guest_book', 'GuestBook::user_show_all');


$routes->get('/guest_book/user_create', 'GuestBook::user_create');
$routes->post('/guest_book/user_save', 'GuestBook::user_save');

$routes->get('/guest_book/user_delete/(:num)', 'GuestBook::user_delete/$1');
$routes->get('/guest_book/user_edit/(:num)', 'GuestBook::user_edit/$1');
$routes->post('/guest_book/user_update/(:num)', 'GuestBook::user_update/$1');

$routes->get('/guest_book/gb_show_all', 'GuestBook::gb_show_all');
$routes->get('/guest_book/gb_delete/(:num)', 'GuestBook::gb_delete/$1');
$routes->get('/guest_book/gb_create', 'GuestBook::gb_create');
$routes->get('/guest_book/gb_edit/(:num)', 'GuestBook::gb_edit/$1');
$routes->post('/guest_book/gb_update/(:num)', 'GuestBook::gb_update/$1');
$routes->post('/guest_book/gb_save', 'GuestBook::gb_save');

$routes->get('/', 'Pages::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/(:num)', 'Komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');

$routes->post('/komik/save', 'Komik::save');
$routes->post('/komik/update/(:num)', 'Komik::update/$1');

// $routes->get('/coba', function(){
//     echo "test test aja";
// });
// $routes->get('/coba/index','Coba::index');
// $routes->get('/coba/about','Coba::about');
// $routes->get('/coba/(:any)','Coba::about/$1');

// $routes->get('/users/index','Admin\Users::index');


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
