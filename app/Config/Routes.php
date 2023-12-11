<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//dashboard
$routes->get('/', 'Home::index');
//show all courses
$routes->get('/courses', 'CoursesController::index');
$routes->get('/courses/insert', 'CoursesController::create');
