<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// student biodata


$routes->group('', ['filter' => 'isSession'], static function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('register', 'Auth::register');
    $routes->get('panel', 'Dashboard::panel');
    $routes->post('auth-signin', 'Auth::signin'); // Route to sign in for student
    $routes->get('dashboard', 'Dashboard::dashboard'); // Route to direct to the dashboard
    $routes->get('bio-data', 'Dashboard::biodata'); // Route to the redirect to the biodata section in the menu.
    $routes->get('update-photo', 'Dashboard::uploadPhoto'); // Route to redirect the section to upload photos.
    $routes->post('upload-photo', 'Biodata::uploadPhoto'); // Route to upload photo student
    $routes->post('register-student', 'Biodata::register'); // Route to upload photo student
    $routes->get('basic', 'Biodata::studentdata'); // student biodata
    $routes->get('download/biodata/(:any)', 'Biodata::download/$1'); // student biodata
    $routes->get('sign-out', 'Auth::signout');
    $routes->get('payments', 'Payments::index');
    $routes->get('payments/paymentable', 'Payments::tranzgate');
});
