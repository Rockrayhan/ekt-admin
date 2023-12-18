<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index'); //dashboard
$routes->get('/courses', 'CoursesController::index');//show all courses
$routes->get('/courses/insert', 'CoursesController::create');
$routes->post('/courses/store', 'CoursesController::store');
