<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planilla extends CI_Controller {

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
        $this->load->model(array('Msecurity','Mpersonas','Mplanilla','Mproduccion','Mpago','Mpaquete'));
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
		$d["planillas"]=$this->Mplanilla->getplanilla();
		$this->load->view('planilla/index', $d);
	
	}
	/**/
	
	
	public function registrar(){
        $d = array();
        $this->Msecurity->url_and_lan($d);
		$this->load->view('planilla/create',$d);        	
    }
	/**/
	public function eliminar($lan, $idproduccion){
        $d = array();
        $this->Msecurity->url_and_lan($d);
        //$d["colegios"]= $this->Mestudiante->get_all_colegios();
		
		$this->Mproduccion->eliminarproduccion($idproduccion);
	
    }
	/**/
	public function detalle($lan,$idplanilla){
		$d = array();
        $this->Msecurity->url_and_lan($d);
       $d["detalleplanilla"]= $this->Mplanilla->get_detalles($idplanilla);
       $d["personas"]=$this->Mpersonas->get_all();
       $d["idplanilla"]=$idplanilla;
       
       $this->load->view('planilla/detalleplanilla', $d);

	}
	/**/
	   public function guardar()
   {
        $d = array();
		$this->Msecurity->url_and_lan($d);
        parse_str($this->input->post("datos"), $nuevodato);
        $nuevodato = $this->Msecurity->sanear_array($nuevodato);
        $ok=$this->Mplanilla->guardar($nuevodato);
         redirect('/planilla', 'refresh');
   }
   /**/
      public function guardardetalle()
   {
        $d = array();
		$this->Msecurity->url_and_lan($d);
        $perid=	$this->input->post("per_id");
        $plaid=$this->input->post("pla_id");
       	$d["planilla"]= $this->Mplanilla->get_uno_planilla($plaid);
       	$totalcordones= $this->Mproduccion->getsumacordones($perid,$d["planilla"][0]->pla_fechainicio,$d["planilla"][0]->pla_fechafinal);
       	$totalpaquetes= $this->Mpaquete->getsumapaquetes($perid,$d["planilla"][0]->pla_fechainicio,$d["planilla"][0]->pla_fechafinal);
       	
       	$anticipo=$this->Mpago->getanticipos($perid,$d["planilla"][0]->pla_fechainicio,$d["planilla"][0]->pla_fechafinal);
       	//print_r($anticipo);
       	//print_r($totalcordones);
       	$totalgeneral=($totalcordones[0]->pro_cantidad*4) + ($totalpaquetes[0]->paq_cantidad*12)-($anticipo[0]->pag_monto);

       	$this->Mplanilla->guardardetalle($perid,$plaid,$totalcordones[0]->pro_cantidad,$totalpaquetes[0]->paq_cantidad,$anticipo[0]->pag_monto,$totalgeneral);
		//print_r($ok);
		$d["detalleplanilla"]= $this->Mplanilla->get_detalles($plaid);
       	$this->load->view('planilla/listardetalleplanilla', $d);
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