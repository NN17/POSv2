<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'ignite';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'ignite/home';

/*
* Route for Language Switching
*/
$route['language/(:any)'] = 'ignite/switchLanguage';


/*
* Routes for setting
*/
$route['warehouse'] = 'ignite/warehouse';
$route['create-warehouse'] = 'ignite/createWarehouse';
$route['edit-warehouse/(:num)'] = 'ignite/editWarehouse';

/*
* Routes for Suppliers
*/
$route['supplier'] = 'ignite/supplier';
$route['create-supplier'] = 'ignite/createSupplier';
$route['edit-supplier/(:num)'] = 'ignite/editSupplier';

/*
* Routes for Currency
*/
$route['currency'] = 'ignite/currency';

/*
* Routes for Categories
*/
$route['categories'] = 'ignite/categories';
$route['create-category'] = 'ignite/createCategory';
$route['edit-category/(:num)'] = 'ignite/editCategory';

/*
* Routes for Brands
*/
$route['brands'] = 'ignite/brands';
$route['create-brand'] = 'ignite/createBrand';
$route['edit-brand/(:num)'] = 'ignite/editBrand';

/*
* Routes for Items & Price
*/
$route['items-price/(:num)'] = 'ignite/itemsPrice';
$route['new-item/(:any)'] = 'ignite/newItem';
$route['edit-item/(:num)'] = 'ignite/editItem';

/*
* Routes for Purchase
*/
$route['purchase/(:num)'] = 'ignite/purchase';
$route['create-purchase'] = 'ignite/newPurchase';
$route['edit-purchase/(:num)'] = 'ignite/editPurchase';

/*
* Routes for Sales
*/
$route['sales'] = 'ignite/sales';