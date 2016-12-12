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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//exit($_SERVER['REQUEST_URI']);
//exit(print_r($route, true));
//$route['v1/user/(\d+)'] = function ($id) {
//   exit('v1/user?id='.$id);
//    return 'v1/user?id='.$id;
//};

//$route['v1/user/(:num)'] = 'v1/user?id=$1';
$route['v1/user/(\d+)'] = 'v1/user/index/index/$1';
$route['v1/user/contact/(\d+)'] = 'v1/user/contact/index/index/$1';
$route['v1/user/(\d+)/contact/(\d+)'] = 'v1/user/contact/index/index/$2/$1';

//exit('<pre>'.print_r($route['v1/user/(\d+)'], true).'</pre>');
//$route['v1/user/contact'] = 'v1/user/contact/rest_server/yahoo';
//$route['v1/user/:user/contact/:contact'] = 'v1/user/contact?user=$1&contact=$2';
/*
 * for when we go with further routing
$route['v1/([a-z]+)/(\d+)/([a-z]+)/(\d+)/(.+)'] = function ($c1, $id1, $c2, $id2, $action)
{
    //exit('v1/'.$c1.'/'.$c2.'/'.$action.'/'.$c1.'_id/'.$id1.'/'.$c2.'_id/'.$id2);
        return 'v1/'.$c1.'/'.$c2.'/'.$action.'/'.$c1.'_id/'.$id1.'/'.$c2.'_id/'.$id2;
        //'v1/user/contact/'.$action.'/user_id/'.$user.'/contact_id/'.$contact;
};

$route['v1/([a-z]+)/(\d+)/(.+)'] = function ($c1, $id1, $action)
{
//    exit('v1/'.$c1.'/'.$action.'/'.$c1.'_id/'.$id1);
        return 'v1/'.$c1.'/'.$action.'/'.$c1.'_id/'.$id1;
        //'v1/user/contact/'.$action.'/user_id/'.$user.'/contact_id/'.$contact;
};
*/

/*
$route['v1/user/(\d+)/contact/(\d+)'] = function ($user, $contact)
{
//    exit('v1/user/contact/?user='.$user.'&contact='.$contact);
        return 'v1/user/contact/user_id/'.$user.'/contact_id/'.$contact;
};
*/
