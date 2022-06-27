<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('ProductController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// route since we don't have to scan directories.
$routes->get('hello', 'HelloController::index');
$routes->get('addrecord', 'HelloController::addrecord');
$routes->post('addnew', 'HelloController::addnew');
$routes->get('editnew', 'HelloController::editnew');
$routes->get('editnew/(:num)', 'HelloController::editnew/$1');
$routes->post('update/(:num)', 'HelloController::update/$1');
$routes->get('delete/(:num)', 'HelloController::delete/$1');
//layout Routes
$routes->get('main', 'HelloController::main');
// product routes
$routes->get('cart_view', 'CartController::index');
$routes->get('contact', 'ContactController::index');
$routes->get('detail/(:num)', 'ProductController::detail/$1');
$routes->get('galery', 'ProductController::galery');
$routes->get('newspaper', 'ProductController::newspaper');
$routes->get('product', 'ProductController::product');
$routes->get('service', 'ProductController::service');
$routes->get('sub_news', 'ProductController::sub_news');
$routes->get('support', 'ProductController::support');
$routes->get('/', 'ProductController::index',['filter'=> 'noauth']);
$routes->match(['post','get'],'bill', 'ProductController::bill');
$routes->get('bill', 'ProductController::bill',['filter'=>'auth']);
$routes->get('payment', 'CartController::payment');
//admin routes
$routes->get('layout', 'AdminController::index');
//category routes
$routes->get('add_category', 'CategoryController::add_category');
$routes->get('index_category', 'CategoryController::index');
$routes->post('add_cate', 'CategoryController::store');
$routes->get('edit_category/(:num)', 'CategoryController::edit/$1');
$routes->post('update_category/(:num)', 'CategoryController::update/$1');
$routes->get('delete_category/(:num)', 'CategoryController::delete/$1');
//product routes
$routes->get('add_product', 'ProductController::add_product');
$routes->get('index_product', 'ProductController::index_product');
$routes->post('addnew_product', 'ProductController::store');
$routes->get('edit_product/(:num)', 'ProductController::edit_product/$1');
$routes->post('update_product/(:num)', 'ProductController::update/$1');
$routes->get('delete_product/(:num)', 'ProductController::delete/$1');
$routes->post('update_hastag/(:num)','ProductController::update_hastag/$1');
//login routes
$routes->get('register','UserController::register', ['filter' => 'noauth']);
$routes->get('login','UserController::login', ['filter' => 'noauth']);
$routes->post('user_save', 'UserController::save');
$routes->post('check', 'UserController::check');
$routes->add('logout','UserController::logout');
//cart Routes
$routes->post('addcart/(:num)', 'CartController::addCart/$1');
$routes->get('delete_cart/(:num)','CartController::delete_cart/$1');
$routes->post('update_cart/(:num)', 'CartController::update/$1');
$routes->get('clear_cart', 'CartController::clear');
$routes->post('uptotal', 'CartController::uptotal');
$routes->post('save_final_bill', 'CartController::save_final_bill');
//payment Routes
$routes->post('save_payment','CartController::save_payment');
//order Routes
$routes->get('order_view','OrderDetailController::order_view');
$routes->get('orderdetail_view', 'OrderDetailController::orderdetail_view');
$routes->post('update_status/(:num)', 'OrderDetailController::updateStatus/$1');
$routes->get('orderdetail','OrderDetailController::orderdetail');
//contact Routes
$routes->get('contact', 'ContactController::index');
$routes->post('contact_save', 'ContactController::save');
$routes->get('contact_view', 'ContactController::view');
$routes->post('contact_delete/(:num)', 'ContactController::delete/$1');
$routes->get('view_contact','ContactController::contact_view');
//user routes
$routes->get('user_view','UserController::index');
$routes->get('delete_user','UserController::delete');
//user sites routes
$routes->get('user_main','UserController::usermain', ['filter' => 'authuser']);
$routes->get('add_avatar','UserController::addava', ['filter'=>'authuser']);
$routes->post('ava_save', 'UserController::avasave');
$routes->get('orderview','UserController::orderview');
//coupon index
$routes->get('coupon','CartController::coupon');
$routes->get('add_coupon', 'CartController::add_coupon');
$routes->post('save_coupon', 'CartController::save_coupon');
$routes->get('delete_coupon/(:num)', 'CartController::delete_coupon/$1');
$routes->get('getCoupon/(:num)', 'CartController::getCoupon/$1');
$routes->get('coup_view','CartController::coup_view');
$routes->get('unsetcoupon/(:num)', 'CartController::unsetcoupon/$1');
$routes->get('getvoucher', 'CartController::getvoucher');
//contribute routes
$routes->get('add_color/(:num)', 'ContributeController::add_color/$1');
$routes->get('add_capacity/(:num)', 'ContributeController::add_capacity/$1');
$routes->get('add_image/(:num)', 'ContributeController::add_image/$1');
$routes->get('add_describe/(:num)', 'ContributeController::add_describe/$1');
$routes->post('save_capacity/(:num)', 'ContributeController::save_capacity/$1');
$routes->post('save_color/(:num)', 'ContributeController::save_color/$1');
$routes->post('save_image/(:num)', 'ContributeController::save_image/$1');
$routes->post('save_describe/(:num)', 'ContributeController::save_describe/$1');
$routes->get('address','UserController::address');
$routes->post('save_address', 'UserController::save_address');
$routes->get('index_add', 'UserController::index_add');
$routes->get('delete_address/(:num)', 'UserController::delete_address/$1');
// comment
$routes->post('add_comment/(:num)', 'ProductController::add_comment/$1');
//error routes
$routes->set404Override();
//success Routes
$routes->get('success','UserController::success');
/*
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
