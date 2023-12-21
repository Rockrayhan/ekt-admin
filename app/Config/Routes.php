<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index',); //dashboard
$routes->get('/courses', 'CoursesController::index');//show all courses
$routes->get('/courses/insert', 'CoursesController::create');
$routes->post('/courses/store', 'CoursesController::store');


// delete
$routes->get('/courses/delete/(:num)', 'CoursesController::delete/$1');
// edit
$routes->get('/courses/edit/(:num)', 'CoursesController::edit/$1');
// update
$routes->post('/courses/update/(:num)', 'CoursesController::update/$1');



// signup / register
$routes->get('/signup', 'SignupController::index');
$routes->match(['get','post'] ,'signup/store', 'SignupController::store');

// login
$routes->get('/login', 'LoginController::index');
$routes->post('/loginuser', 'LoginController::login');

//signout
$routes->get('/signout', 'LoginController::logout');


// Frontend
$routes->get('/coursesall', 'Frontend\CourseController::index');
$routes->get('/course/(:num)', 'Frontend\CourseController::show/$1');
