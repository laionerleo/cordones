<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/

$route[$l.'personas']                 		= 'Persona';
$route[$l.'produccion']                 	= 'Produccion';
$route[$l.'produccion/guardarproduccion']   = 'Produccion/guardar';
$route[$l.'produccion/registrar/(:num)']    = 'Produccion/registrar/$1/$2';




/**/

$route['default_controller']               = 'Welcome';





/**/



/**/

$route[$l.'(.+)$']                        = "$2";
$route[$i.'$']                            = $route['default_controller'];

/**/

$route['translate_uri_dashes']            = TRUE;
$route['404_override']                    = 'Welcome/error404';
$route['403_override']                    = 'Welcome/error403';
$route['503_override']                    = 'Welcome/error503';
$route['504_override']                    = 'Welcome/error504';
/**/

?>