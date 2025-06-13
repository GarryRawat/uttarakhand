<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// admin routes


$routes->get('/dashboard', 'AdminController::Adminindex',['filter' => 'auth']);
$routes->get('/insertDetails', 'AdminController::InsertDetails',['filter' => 'auth']);
$routes->get('/addPhotos', 'AdminController::AddimageData',['filter' => 'auth']);
$routes->get('/addarea', 'AdminController::ShowArea',['filter' => 'auth']);
$routes->get('/listpagedetails', 'AdminController::ListingPages',['filter' => 'auth']);
$routes->get('/editallpages/(:num)', 'AdminController::Editallpages/$1',['filter' => 'auth']);
$routes->get('/login', 'AdminController::Login');
$routes->post('/store-login', 'AdminController::Checklogin');
$routes->post('/logout', 'AdminController::logout_session',['filter' => 'auth']);

/**
 * admin post routes
 */
$routes->post('/addpageData', 'AdminController::AddpageData',['filter' => 'auth']);
$routes->post('/addareaData', 'AdminController::InsertareaData',['filter' => 'auth']);
$routes->post('/addmultyData', 'AdminController::InsertmultyData',['filter' => 'auth']);
$routes->post('/updateallpages', 'AdminController::updateallpages',['filter' => 'auth']);
$routes->post('/deletepages', 'AdminController::deletepages',['filter' => 'auth']);
$routes->post('/addpageData', 'AdminController::AddpageData',['filter' => 'auth']);

/**
 * foods routes
 */
$routes->get('/addfood', 'FoodController::Showfoodpage',['filter' => 'auth']);
$routes->post('/addmultyData', 'FoodController::InsertmultyData',['filter' => 'auth']);
$routes->get('/food-listing', 'FoodController::get_food_listing',['filter' => 'auth']);
$routes->get('/get-food-image/(:num)', 'FoodController::get_food_image_by_id/$1',['filter' => 'auth']);
$routes->post('/update-food-image', 'FoodController::update_food_image',['filter' => 'auth']);
$routes->post('/delete-food-images', 'FoodController::delete_food_images',['filter' => 'auth']);
/** 
 * contact routes
 */
$routes->get('/listcontact', 'ContactController::list_contact',['filter' => 'auth']);
$routes->post('/insertContactPage', 'ContactController::insertContact',['filter' => 'auth']);
$routes->get('/listsubscriber', 'ContactController::list_subscriber',['filter' => 'auth']);

/** 
 * pages images
 */
$routes->post('/addimageData', 'ImagesController::InsertimageData',['filter' => 'auth']);
$routes->get('/photoslisting', 'ImagesController::photos_listing',['filter' => 'auth']);
$routes->get('/get_image/(:num)', 'ImagesController::get_image_byid/$1',['filter' => 'auth']);
$routes->post('/update-pages-image', 'ImagesController::update_pages_image',['filter' => 'auth']);
$routes->post('/delete-pages-image', 'ImagesController::delete_pages_image',['filter' => 'auth']);

$routes->post('/addareaData', 'AdminController::InsertareaData',['filter' => 'auth']);

/**
 * blog routes 
 */
$routes->get('/addblogs', 'BlogController::ShowBlogs',['filter' => 'auth']);
$routes->post('/addblogData', 'BlogController::AddBlogs',['filter' => 'auth']);
$routes->get('/listblog', 'BlogController::ListBlog',['filter' => 'auth']);
$routes->get('/editblogs/(:num)', 'BlogController::EditBlogs/$1',['filter' => 'auth']);
$routes->post('/updateblog', 'BlogController::UpdateBlogs',['filter' => 'auth']);
$routes->post('/itemDelete', 'BlogController::DeleteBlog',['filter' => 'auth']);


/**
 * frontend Routes
 */ 
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::home');
$routes->get('/about', 'AboutController::About');
$routes->get('/destination', 'DestinationController::Destination');


$routes->get('/Places', 'PlacesController::get_place_page');
$routes->get('/blog', 'blogController::ShowBLogPage');
$routes->get('/blogdetails/(:any)', 'blogController::Showblogdetails/$1');
$routes->get('/contact', 'ContactController::contact');

// 
$routes->get('/hotel', 'HotelController::viewHotels');
$routes->get('/hotel-details/(:num)', 'HotelController::hotalDetails/$1');
$routes->post('/get-room-category', 'HotelController::getroomCategory');
$routes->post('/store-booking', 'HotelController::storeBooking');
$routes->get('/checkout-booking/(:num)', 'HotelController::checkoutBooking/$1');



/**
 * post frontend  routes
 */
$routes->post('/getpages', 'HomeController::GetPages');
$routes->post('/addsubscribers', 'ContactController::addsubscribers');
$routes->post('/addusercommnets', 'ContactController::addcommnets');
$routes->post('/adduserlike', 'ContactController::addlikes');
$routes->post('/getdestination', 'HomeController::searchDestination');

// my routes

$routes->get('/(:segment)/(:segment)', 'HomeController::page/$1/$2');
$routes->get('/(:segment)', 'HomeController::Mainpage/$1');
