<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// products
$routes->get('/', 'Home::index', ['filter' => 'authGuard'] ); //dashboard
$routes->get('/courses', 'CoursesController::index');   //show all courses
$routes->get('/courses/insert', 'CoursesController::create');
$routes->post('/courses/store', 'CoursesController::store');


// delete
$routes->get('/courses/delete/(:num)', 'CoursesController::delete/$1');
// edit
$routes->get('/courses/edit/(:num)', 'CoursesController::edit/$1');
// update
$routes->post('/courses/update/(:num)', 'CoursesController::update/$1');



// insturctors
$routes->get('instructors', 'Home::index' ); //
// $routes->get('/courses', 'CoursesController::index');   //show all courses
// $routes->get('/courses/insert', 'CoursesController::create');
// $routes->post('/courses/store', 'CoursesController::store');



// Reviews
$routes->get('/reviews', 'ReviewControleller::index');   //show all review
$routes->get('/reviews/delete/(:num)', 'ReviewControleller::delete/$1');
// $routes->get('/courses/insert', 'ReviewControleller::create');
// $routes->post('/courses/store', 'ReviewControleller::store');


$routes->get('/courses/delete/(:num)', 'CoursesController::delete/$1'); // delete
$routes->get('/courses/edit/(:num)', 'CoursesController::edit/$1'); // edit
$routes->post('/courses/update/(:num)', 'CoursesController::update/$1'); // update



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

$routes->get('/allreview', 'Frontend\ReviewController::index');