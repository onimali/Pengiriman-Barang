<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * LOGIN ROUTE
 */
$route['default_controller'] = 'AuthController'; // INI UNTUK TAMPILAN
$route['login/(:num)'] = 'AuthController/index/$1'; // INI PROSES QUERY

/**
 * LOGOUT ROUTE
 */
$route['logout'] = 'AuthController/Logout';

/**
 * FORGOT PASSWORD ROUTE
 */
$route['forgot/(:num)'] = 'AuthController/ForgotPassword/$1';

/**
 * REGISTER ROUTE
 */
$route['register'] = 'AuthController/Register'; // INI UNTUK TAMPILAN
$route['register/(:num)'] = 'AuthController/Register/$1'; // INI PROSES QUERY

/**
 * BRANCH ROUTE
 * PILIH KANTOR CABANG
 */
$route['branch/(:num)'] = 'BranchController/index/$1'; // INI PROSES QUERY 
$route['branchData'] = 'BranchController/view';

/**
 * HOME ROUTE
 */
$route['home'] = 'HomeController/index'; // TAMPILAN HOME


/**
 * PAKET ROUTE
 */
$route['package/(:num)'] = 'PackageController/index/$1'; // TAMPILAN TAMBAH PAKET
