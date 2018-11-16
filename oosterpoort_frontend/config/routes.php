<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'pages/view_public_page';
$route['private_page/(:any)'] = 'pages/view_private_page/$1';
$route['(:any)'] = 'pages/view_public_page/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
