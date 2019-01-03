<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	
	function __construct(){
        parent::__construct();
        $this->load->model('Mconsulta');
        $this->load->model('Mambientes');
        $this->load->model('Musuarios');
        $this->load->library('session');
    }


	public function index()   
	{

            $datos=$this->misDatos();
            $this->load->view('frm_login',$datos);


	}
        public function valida_usuario()                  
	{
            $this->load->library('form_validation');
            $dataUser['usuario'] = $this->input->post('username');
            $dataUser['password'] = $this->input->post('password');
            $dataUser['idInstancia'] = $this->input->post('idInstancia');
            
            
            if ($dataUser['idInstancia'] == 0) {
            echo "<script>alert('Debe seleccionar la Instancia.');</script>";
            
            }else{               
                    
                $data = $this->Musuarios->getVerificaUser($dataUser);
                if($data){         
                     $this->session->set_userdata('logged_in', $dataUser);
                   redirect(base_url().'index.php/liquidaciones/home'); 
                }else{
                   $dataUser['mensaje']="usuario invalido"; 
                   $datos['mensaje']="usuario invalido"; 
                   $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
                   $datos['base_url2']=base_url();            
                   $this->load->view('frm_login',$datos);
                }

            }
            $this->index();
        

	}
        public function logueado()   
	{
           
            
            $this->load->view('logueado');


	}
        public function logout() {

            $dataUser['usuario'] = "";
            $dataUser['password'] = "";
            $dataUser['idInstancia'] = "";
            
            $this->session->unset_userdata('logged_in', $dataUser);
            $datass=$this->misDatos();
            redirect(base_url().'index.php/login');
            //$this->load->view('frm_login', $datass);
        }
        public function misDatos() {
              $datos['mensaje']="usuario invalido"; 
              $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
              $datos['base_url2']=base_url();     
            return $datos;
        }
        
}
