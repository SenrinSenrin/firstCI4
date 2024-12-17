<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/hhhh', 'Home::index');

// user authinication route
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'authGuard']);


// Courses router
$routes->get('/courses', 'CoursesController::index');
$routes->post('/courses/save', 'CoursesController::save');
$routes->get('/courses/delete/(:num)', 'CoursesController::delete/$1');

// $routes->get('/courses/create', 'CoursesController::create');
// $routes->post('/courses/store', 'CoursesController::store');
// $routes->get('/courses/edit/{id}', 'CoursesController::edit');
// $routes->post('/courses/update/{id}', 'CoursesController::update');
// $routes->delete('/courses/delete/{id}', 'CoursesController::delete');
