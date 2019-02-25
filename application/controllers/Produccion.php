<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produccion extends CI_Controller {

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
        $this->load->model(array('Msecurity','Mpersonas','Mproduccion'));

    }

	/**/
		
	public function index()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		  $d["totalcordones"]=$this->Mproduccion->gettotalcordones();
		  $d["producciondiaria"]=$this->Mproduccion->getproducciondiaria();
		  //print_r($d["producciondiaria"]);
		  
		 // print_r($d["personas"]);
		  //print_r($d["totalcordones"]);


		$this->load->view('produccion/index', $d);
	
	}
	/**/
	
	
	public function registrar($lan, $idproduccion){
        $d = array();
        $this->Msecurity->url_and_lan($d);
        //$d["colegios"]= $this->Mestudiante->get_all_colegios();
		if ($idproduccion==0) {
		$d["personas"]=$this->Mpersonas->get_all();
		$this->load->view('produccion/create',$d);        	
      
		}	
    }
	/**/
	   public function guardar()
   {
        parse_str($this->input->post("datos"), $nuevodato);
        $nuevodato = $this->Msecurity->sanear_array($nuevodato);
          $ok=$this->Mproduccion->guardar($nuevodato);
       
        
 
       
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