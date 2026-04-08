<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/kursus/create', 'Dashboard::create');
$routes->post('/kursus/store', 'Dashboard::store');
$routes->get('/kursus/edit/(:num)', 'Dashboard::edit/$1');
$routes->post('/kursus/update/(:num)', 'Dashboard::update/$1');
$routes->get('/kursus/delete/(:num)', 'Dashboard::delete/$1');
