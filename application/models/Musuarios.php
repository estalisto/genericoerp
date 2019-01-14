<?php

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
                $query = $this->db->where('palabra_clave',md5($dataUser['password']));
		        $query=$this->db->get();
                if ($query->num_rows() == 1) {
                    return $query->result_array();
                } else {
                    redirect('http://localhost:82/genericoerp/');
                }
    }
    public function getValidaUsuario($dataUser){
		
                $query = $this->db->select('*');
		        $query = $this->db->from('am_usuarios');
                $query = $this->db->where('id_usuario',$dataUser['usuario']);
                $query = $this->db->where('palabra_clave',md5($dataUser['password']));
		        $query=$this->db->get();
                       if ($query->num_rows() == 1) {
                    return 1;
                } else {
                    return 0;
                }
                
    }
    public function setRegistrarNuevaContrasenia($dataUser){

        $this->db->set('palabra_clave',md5($dataUser['nueva_clave']));
        $this->db->where('id_usuario', $dataUser['usuario']);
        $this->db->where('palabra_clave', md5($dataUser['password']));
        $this->db->update('am_usuarios'); 
        return "Registro Actualizado...";

    }


}