<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route['404_override'] = 'main/notFound';

$route['admin/login'] = "user/adm_login";

$route['admin/gallery'] = "main/gallery";
$route['accomodation/(:any)'] = "main/accomodation";
$route['facilities/(:any)'] = "main/facilities"; 
$route['reservation/(:any)'] = "main/rsvp";
$route['package'] = "package/index";


$route['admin/posts'] = "admin/posts";
$route['admin/post/save'] = "admin/post_save";
$route['admin/post/update'] = "admin/post_update";
$route['admin/setting'] = "admin/setting";
$route['admin/setting/slideshow'] = "admin/setting_slideshow";
$route['admin/setting/slideshow/delete'] = "admin/setting_slideshow_delete";
$route['admin/message/isread/(:any)'] = "admin/msgIsRead";
$route['admin/setting/users'] = "admin_user";

// RESERVATION
$route['reservation/do'] = "reservation/booking";


$route['contact/do'] = 'contact/sendMessage';



/* End of file routes.php */
/* Location: ./application/config/routes.php */