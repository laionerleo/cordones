<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
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
        $this->load->model(array('Msecurity'));
    }
	/**/
  public function index(){
      $d = array();
      $this->Msecurity->url_and_lan($d);
     $isOk = true; //Session
     if($isOk){
        redirect($d['url'].'menu');
     }else{
       redirect($d['url']."?m=Error de Session");
     }
  }
}