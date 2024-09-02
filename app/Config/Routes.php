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
$routes->get('/listpagedetails', 'AdminController::ListingPages');
$routes->get('/editallpages/(:num)', 'AdminController::Editallpages/$1');

/**
 * admin post routes
 */
$routes->post('/addpageData', 'AdminController::AddpageData');
$routes->post('/addimageData', 'AdminController::InsertimageData');
$routes->post('/addareaData', 'AdminController::InsertareaData');
$routes->post('/addmultyData', 'AdminController::InsertmultyData');
$routes->post('/updateallpages', 'AdminController::updateallpages');
$routes->post('/deletepages', 'AdminController::deletepages');
$routes->post('/addpageData', 'AdminController::AddpageData');

/**
 * foods routes
 */
$routes->get('/addfood', 'FoodController::Showfoodpage');
$routes->post('/addmultyData', 'FoodController::InsertmultyData');
$routes->get('/food-listing', 'FoodController::get_food_listing');
$routes->get('/get-food-image/(:num)', 'FoodController::get_food_image_by_id/$1');
$routes->post('/update-food-image', 'FoodController::update_food_image');
$routes->post('/delete-food-images', 'FoodController::delete_food_images');
/** 
 * contact routes
 */
$routes->get('/listcontact', 'ContactController::list_contact');
$routes->post('/insertContactPage', 'ContactController::insertContact');
$routes->get('/listsubscriber', 'ContactController::list_subscriber');

/** 
 * pages images
 */
$routes->post('/addimageData', 'ImagesController::InsertimageData');
$routes->get('/photoslisting', 'ImagesController::photos_listing');
$routes->get('/get_image/(:num)', 'ImagesController::get_image_byid/$1');
$routes->post('/update-pages-image', 'ImagesController::update_pages_image');
$routes->post('/delete-pages-image', 'ImagesController::delete_pages_image');


$routes->post('/addareaData', 'AdminController::InsertareaData');

/**
 * blog routes 
 */
$routes->get('/addblogs', 'BlogController::ShowBlogs');
$routes->post('/addblogData', 'BlogController::AddBlogs');
$routes->get('/listblog', 'BlogController::ListBlog');
$routes->get('/editblogs/(:num)', 'BlogController::EditBlogs/$1');
$routes->post('/updateblog', 'BlogController::UpdateBlogs');
$routes->post('/itemDelete', 'BlogController::DeleteBlog');


/**
 * frontend Routes
 */ 
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

/**
 * post frontend  routes
 */
$routes->post('/getpages', 'HomeController::GetPages');
$routes->post('/addsubscribers', 'ContactController::addsubscribers');
$routes->post('/addusercommnets', 'ContactController::addcommnets');
$routes->post('/adduserlike', 'ContactController::addlikes');
$routes->post('/getdestination', 'HomeController::searchDestination');

// my routes


