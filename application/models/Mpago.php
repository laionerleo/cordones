<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpago extends CI_MODEL {
	/**/
	public function __construct()
    {
        parent::__construct();

 	}

 	/*funcion que debuelve toda las razas de la tablas razas*/
 	public function get_all(){
 		$query = $this->db->get('cur_cursos');
 		$result = $query->result();
 		return $result;
 	}
 	/**/
 	public function getpagoingeniero(){

 		
        
    	$this->db->where('per_id',5);    
        $total=$this->db->get("cor_pago");
        $result = $total->result();
        return $result;
 	}
 	/**/
    public function getproducciondiaria(){
        $this->db->select("pro_fecha as fecha ,sum(pro_cantidad) as cantidad");
         $this->db->group_by('pro_fecha'); 
        $total=$this->db->get("cor_produccion");
        $result = $total->result();
        return $result;
        
    }
    /**/
 	public function guardar($dator){
    
    $datos = array( 'pro_cantidad' =>$dator['inpcantidad'],
                'pro_fecha' =>$dator['inpfecha'],
                'per_id' =>$dator['slcperid'],
                'pro_estado' =>"1",
                        );

    $this->db->insert("cor_produccion",$datos);
    $cursos=$this->db->insert_id();
    return $cursos;
    }
 	/**/
      public function update($dator){
    
    $datos = array( 'cur_curso' =>$dator['curso'],
                'cur_fechafin' =>$dator['fechafin'],
                'cur_nivel' =>$dator['nivel'],
                'cur_instituto' =>$dator['instituto'],
                'cur_duraciondelcurso' =>$dator['duraciondelcurso'],
                'cur_estudiodetalle' =>$dator['estudiodetalle'],
                'cur_idpersona' =>$dator['idpersona'],
                'cur_state' =>$dator['state']
                        );
    $this->db->where('cur_id',$dator['h_cur_id']);
    $this->db->update("cur_cursos",$datos);

    return $dator['h_cur_id'];
    }
 	/**/

}