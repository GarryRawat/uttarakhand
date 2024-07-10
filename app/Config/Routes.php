<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */





// admin routes

$routes->get('/index', 'AdminController::Adminindex');
$routes->get('/insertDetails', 'AdminController::InsertDetails');
$routes->get('/addPhotos', 'AdminController::AddimageData');
$routes->get('/addarea', 'AdminController::ShowArea');
$routes->get('/addfood', 'AdminController::Showfoodpage');
$routes->get('/addblogs', 'BlogController::ShowBlogs');
$routes->get('/listblog', 'BlogController::ListBlog');
$routes->get('/editblogs/(:num)', 'BlogController::EditBlogs/$1');


$routes->post('/addpageData', 'AdminController::AddpageData');
$routes->post('/addimageData', 'AdminController::InsertimageData');
$routes->post('/addareaData', 'AdminController::InsertareaData');
$routes->post('/addmultyData', 'AdminController::InsertmultyData');
$routes->post('/addblogData', 'BlogController::AddBlogs');
$routes->post('/updateblog', 'BlogController::UpdateBlogs');
$routes->post('/itemDelete', 'BlogController::DeleteBlog');


// frontend Routes
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::home');
$routes->get('/about', 'AboutController::About');
$routes->get('/destination', 'DestinationController::Destination');
$routes->get('/Places', 'PlacesController::Places');
$routes->get('/blog', 'blogController::ShowBLogPage');
$routes->get('/contact', 'ContactController::contact');
$routes->get('/(:segment)/(:segment)', 'HomeController::page/$1/$2');
$routes->get('/(:segment)', 'HomeController::Mainpage/$1');


$routes->post('/getpages', 'HomeController::GetPages');

// my routes


