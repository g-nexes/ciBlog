<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//To route through pagination
$route['posts/index'] = 'posts/index';

//creates a post
$route['posts/create'] = 'posts/create';

//updates a post
$route['posts/update'] = 'posts/update';

//to load a particular posts
$route['posts/(:any)'] = 'posts/view/$1';

//Route to posts page (all posts)
$route['posts'] = 'posts/index';

//nav to categories (all categories)
$route['categories'] = 'categories/index';

//Sample Mainpage view
$route['default_controller'] = 'pages/view';

//to navigate through pages
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
