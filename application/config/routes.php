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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['sleep'] = "first/zzz"; // routing for sleep link
$route['show/(:num)'] = "first/gimme/$1";// wildcard routing for show link 
$route['last'] = 'last/welcome'; // normal routing for last link
$route['lock/(:any)/(:any)'] = "welcome/shucks"; // wildcard routing for lockemup link
$route['([a-z][a-z][a-z][a-z])/bingo'] = "bingo"; // regular expression routing for bingo link
// callback routing for dunno link
$route['dunno'] = function() {
    $source = './data/surprise.jpg'; // an image you provide
    // set the mime type for that image
    header("Content-type: image/jpeg"); 
    header('Content-Disposition: inline');
    readfile($source); // dish it
    die(); // and we don't have to go any further
};
$route['comp(\d+)/(:any)'] = 'Wise/Bingo'; // regular expression routing for wisdom link

/* End of file routes.php */
/* Location: ./application/config/routes.php */

