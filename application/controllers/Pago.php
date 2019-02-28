<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {

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
        $this->load->model(array('Msecurity','Mpersonas','Mproduccion','Mpago'));

    }

	/**/
		
	public function index()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$d["pagoingeniero"]=$this->Mpago->getpagoingeniero();
		
		
		$this->load->view('pago/index', $d);
	
	}
	/**/
	public function indext()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$d["pagotrabajadores"]=$this->Mpago->getpagotrabajadores();
		
		
		$this->load->view('pago/indexT', $d);
	
	}
	/**/
	
	
	public function registrarI(){
        $d = array();
        $this->Msecurity->url_and_lan($d);
        $d["var"]=1;
		$this->load->view('pago/create',$d);        	
      
		}	
	/**/
	public function registrarT(){
         $d = array();
        $this->Msecurity->url_and_lan($d);
        $d["var"]=0;
        $d["personas"]=$this->Mpersonas->get_all();
		$this->load->view('pago/create',$d);    
    }
	/**/
	   public function guardarpago()
   {
        parse_str($this->input->post("datos"), $nuevodato);
        $nuevodato = $this->Msecurity->sanear_array($nuevodato);
          $ok=$this->Mpago->guardar($nuevodato);
       
        
 
       
   }
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