<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquete extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
 
        //cargamos la base de datos por defecto
        $this->load->database('default');
        
        //cargamos los agentes para los dispositivos
        $this->load->library('user_agent');

		//cargamos el helper url y el helper form
        $this->load->helper(array('url', 'language'));
        
        //cargamamos la libreria del lenguaje
        $this->lang->load('welcome');

        //cargamos los modelos
        $this->load->model(array('Msecurity','Mpersonas','Mpaquete'));
            if(!@$_SESSION['user']){
            $d = array();
            $this->Msecurity->url_and_lan($d);
            redirect($d['url']."?m=Usted tiene que iniciar session !!!");
        }

    }

	/**/
		
	public function index()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		 $d["totalpaquetes"]=$this->Mpaquete->gettotalpaquetes();
		 $d["producciondiariapaquete"]=$this->Mpaquete->getproducciondiaria();
		 $d["produccionpaquete"]=$this->Mpaquete->getproduccion();

		$this->load->view('paquete/index', $d);
	
	}
	/**/
	
	
	public function registrar($lan, $idpaquete){
        $d = array();
        $this->Msecurity->url_and_lan($d);
		if ($idpaquete==0) {
		$d["produccionpaquete"]=$this->Mpaquete->getproduccion();
		$d["personas"]=$this->Mpersonas->get_all();
		$this->load->view('paquete/create',$d);        	
      
		}	
    }
	/**/
	public function eliminar($lan, $idproduccion){
        $d = array();
        $this->Msecurity->url_and_lan($d);
        //$d["colegios"]= $this->Mestudiante->get_all_colegios();
		
		$this->Mproduccion->eliminarproduccion($idproduccion);
	
	
		      
			
    }
	/**/
	   public function guardar()
   {
        $d = array();
		$this->Msecurity->url_and_lan($d);
        parse_str($this->input->post("datos"), $nuevodato);
        $nuevodato = $this->Msecurity->sanear_array($nuevodato);
          $ok=$this->Mpaquete->guardar($nuevodato);
          $d["produccionpaquete"]=$this->Mpaquete->getproduccion();

      	$this->load->view('paquete/listarproduccionpaquete',$d);        		    

       
        
 
       
   }
	/**/

	public function error404($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error404', $d);
	
	}

	/**/

	public function error($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/

	public function error403($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}


	/**/
}