	<?php
/**
* 
*/
class Mambientes extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getInstanciasaAll(){
		
                $query = $this->db->select("CONCAT(am_pais.id_pais,'/', am_empresa.id_empresa,'/',am_instancia.id_instancia) ID , CONCAT(am_pais.Descripcion,'/',  am_empresa.nombre,'/',am_instancia.codigo) DESCRIPCION ", FALSE);
		$query = $this->db->from('am_pais');
		$query = $this->db->join('am_empresa', 'am_pais.id_pais = am_empresa.id_pais');
                $query = $this->db->join('am_instancia', 'am_instancia.id_empresa = am_empresa.id_empresa');
		$query = $this->db->where('am_pais.estado','A');	
                $query = $this->db->where('am_empresa.estado','A');
                $query = $this->db->where('am_instancia.estado','A');
		$query=$this->db->get();		
		return $query->result_array();
                
                
	}


}