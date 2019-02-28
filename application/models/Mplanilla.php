<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mplanilla extends CI_MODEL {
	/**/
	public function __construct()
    {
        parent::__construct();

 	}

 	/*funcion que debuelve toda las razas de la tablas razas*/
 	public function get_all(){
        $this->db->where('pro_estado',"1");
 		$query = $this->db->get('cur_cursos');
 		$result = $query->result();
 		return $result;
 	}
 	/**/
 	public function getplanilla(){

 		
        
        $this->db->where('pla_estado',"1");
        $total=$this->db->get("cor_planilla");
        $result = $total->result();
        return $result;
 	}
 	/**/
    public function getproducciondiaria(){
        $this->db->select("pro_fecha as fecha ,sum(pro_cantidad) as cantidad");
         $this->db->group_by('pro_fecha'); 
         $this->db->where('pro_estado',"1");
        $total=$this->db->get("cor_produccion");
        $result = $total->result();
        return $result;
        
    }
    /**/
    public function getproduccion(){
        $this->db->select("cor_produccion.pro_fecha , cor_produccion.pro_cantidad,cor_personas.per_nombre ,cor_produccion.pro_id")
         ->from('cor_produccion')
         ->order_by("cor_produccion.pro_fecha", "desc")
         ->where('pro_estado',"1")
         ->join('cor_personas', 'cor_produccion.per_id = cor_personas.per_id');
            $query = $this->db->get();

        $result = $query->result();
        return $result;
        
    }
    /**/
    public function get_detalles($idplanilla){
		$this->db->where('pla_id',$idplanilla);
        $total=$this->db->get("cor_detalle_planilla");
        $result = $total->result();
        return $result;
 	        
        
    }
    /**/
       public function get_uno_planilla($idplanilla){
		$this->db->where('pla_id',$idplanilla);
        $total=$this->db->get("cor_planilla");
        $result = $total->result();
        return $result;
 	        
        
    }
    /**/
 	public function guardar($dato){
    
    $datos = array( 'pla_fechainicio' =>$dato['inpfechainicio'],
                'pla_fechafinal' =>$dato['inpfechafinal'],
                'pla_estado' =>"1",
                   );

    $this->db->insert("cor_planilla",$datos);
    $cursos=$this->db->insert_id();
    return $cursos;
    }
 	/**/
 	public function guardardetalle($perid,$plaid,$totalcordones,$anticipo,$totalgeneral){
    
    $datos = array(

    			'det_totalcordones' =>$totalcordones,
                'det_totalpaquetes' =>0,
                'det_anticipo' 		=>$anticipo,
                'det_total_pagar'	=>$totalgeneral,
                'per_id' 			=>$perid,
                'pla_id' 			=>$plaid,
                'det_estado' 		=>1
        
                  );
    $this->db->insert("cor_detalle_planilla",$datos);
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