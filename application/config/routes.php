<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/

$route[$l.'personas']                 		= 'Persona';
$route[$l.'produccion']                 	= 'Produccion';
$route[$l.'paquete']                 		= 'Paquete';
$route[$l.'planilla']                 		= 'Planilla';




$route[$l.'produccion/guardarproduccion']   = 'Produccion/guardar';
$route[$l.'produccion/registrar/(:num)']    = 'Produccion/registrar/$1/$2';
$route[$l.'paquete/registrar/(:num)']    	= 'Paquete/registrar/$1/$2';
$route[$l.'planilla/crear']                 		= 'Planilla/registrar';
$route[$l.'planilla/guardarplanilla']                 		= 'Planilla/guardar';
$route[$l.'planilla/detalle/(:num)']                 		= 'Planilla/detalle/$1/$2';
$route[$l.'planilla/detalleplanilla/guardar']                 		= 'Planilla/guardardetalle';





$route[$l.'paquete/guardarpaquete']   		= 'Paquete/guardar';

$route[$l.'login']      				= 'Security';
$route[$l.'eliminarproduccion/(:num)']    = 'Produccion/eliminar/$1/$2';

$route[$l.'pagoingeniero']                 	= 'Pago';
$route[$l.'pagotrabajadores']               = 'Pago/indext';
$route[$l.'pagoingeniero/crear']    		= 'Pago/registrarI';
$route[$l.'pagotrabajadores/crear']    		= 'Pago/registrarT';


$route[$l.'guardarpago']    			= 'Pago/guardarpago';
$route[$l.'exit']      				= 'Security/exit';







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