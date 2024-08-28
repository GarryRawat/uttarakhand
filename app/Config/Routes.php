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
$routes->get('/listpagedetails', 'AdminController::ListingPages');
$routes->get('/photoslisting', 'AdminController::photos_listing');
$routes->get('/editblogs/(:num)', 'BlogController::EditBlogs/$1');
$routes->get('/editallpages/(:num)', 'AdminController::Editallpages/$1');
$routes->get('/listcontact', 'AdminController::list_contact');
$routes->get('/listsubscriber', 'AdminController::list_subscriber');
$routes->get('/get_image/(:num)', 'AdminController::get_image_byid/$1');


$routes->post('/addpageData', 'AdminController::AddpageData');
$routes->post('/addareaData', 'AdminController::InsertareaData');
$routes->post('/addmultyData', 'AdminController::InsertmultyData');
$routes->post('/addblogData', 'BlogController::AddBlogs');
$routes->post('/updateblog', 'BlogController::UpdateBlogs');
$routes->post('/itemDelete', 'BlogController::DeleteBlog');
$routes->post('/updateallpages', 'AdminController::updateallpages');
$routes->post('/deletepages', 'AdminController::deletepages');


// frontend Routes
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::home');
$routes->get('/about', 'AboutController::About');
$routes->get('/destination', 'DestinationController::Destination');
$routes->get('/Places', 'PlacesController::Places');
$routes->get('/blog', 'blogController::ShowBLogPage');
$routes->get('/blogdetails/(:any)', 'blogController::Showblogdetails/$1');
$routes->get('/contact', 'ContactController::contact');

$routes->get('/(:segment)/(:segment)', 'HomeController::page/$1/$2');
$routes->get('/(:segment)', 'HomeController::Mainpage/$1');


$routes->post('/getpages', 'HomeController::GetPages');
$routes->post('/insertContactPage', 'ContactController::insertContact');
$routes->post('/addsubscribers', 'ContactController::addsubscribers');
$routes->post('/addusercommnets', 'ContactController::addcommnets');
$routes->post('/adduserlike', 'ContactController::addlikes');
$routes->post('/getdestination', 'HomeController::searchDestination');



// my routes


