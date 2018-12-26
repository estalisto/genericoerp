	<?php
/**
* 
*/
class Musuarios extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getVerificaUser($dataUser){
		
                $query = $this->db->select('*');
		$query = $this->db->from('am_usuarios');
                $query = $this->db->where('id_usuario',$dataUser['usuario']);
                $query = $this->db->where('palabra_clave',$dataUser['password']);
		$query=$this->db->get();
                if ($query->num_rows() == 1) {
                    return $query->result_array();
                } else {
                    redirect('http://localhost:82/genericoerp/');
                }
		
                
                
	}


}