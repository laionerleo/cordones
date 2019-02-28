<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpaquete extends CI_MODEL {
	/**/
	public function __construct()
    {
        parent::__construct();

 	}

 	/*funcion que debuelve toda las razas de la tablas razas*/
 	public function get_all(){
        $this->db->where('paq_estado',"1");
 		$query = $this->db->get('cur_cursos');
 		$result = $query->result();
 		return $result;
 	}
 	/**/
 	public function gettotalpaquetes(){

 		
        $this->db->select_sum('paq_cantidad');
        $total=$this->db->get("cor_paquetes");
        $result = $total->result();
        return $result;
 	}
 	/**/
    public function getproducciondiaria(){
        $this->db->select("paq_fecha as fecha ,sum(paq_cantidad) as cantidad");
         $this->db->group_by('paq_fecha'); 
        $total=$this->db->get("cor_paquetes");
        $result = $total->result();
        return $result;
        
    }
    /**/
    public function getproduccion(){
        $this->db->select("cor_paquetes.paq_fecha , cor_paquetes.paq_cantidad,cor_personas.per_nombre ,cor_paquetes.paq_id")
         ->from('cor_paquetes')
         ->order_by("cor_paquetes.paq_fecha", "desc")
         ->where('paq_estado',"1")
         ->join('cor_personas', 'cor_paquetes.per_id = cor_personas.per_id');
            $query = $this->db->get();

        $result = $query->result();
        return $result;
        
    }
    /**/
 	public function guardar($dator){
    
    $datos = array( 'paq_cantidad' =>$dator['inpcantidad'],
                'paq_fecha' =>$dator['inpfecha'],
                'per_id' =>$dator['slcperid'],
                'paq_estado' =>"1",
                        );

    $this->db->insert("cor_paquetes",$datos);
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
    public function eliminarproduccion($id){
    
    $datos = array( 'pro_estado' => "0"
                
                        );
    $this->db->where('pro_id',$id);
    $this->db->update("cor_produccion",$datos);

    
    }
    /**/
 	

}