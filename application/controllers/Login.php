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

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()   
	{
            /*$datos = array('instancias' =>$this->Mambientes->getInstanciasaAll(),
                            'base_url2'=>"http://localhost:82/genericoerp/");*/
            $datos=$this->misDatos();
            $this->load->view('frm_login',$datos);


	}
        public function valida_usuario()                  
	{
            //echo "Login";
            $dataUser['usuario'] = $this->input->post('username');
            $dataUser['password'] = $this->input->post('password');
            $dataUser['idInstancia'] = $this->input->post('idInstancia');
            
           $data = $this->Musuarios->getVerificaUser($dataUser);
           if($data){         
                $this->session->set_userdata('logged_in', $dataUser);
                //$this->load->view('admin_page');
              redirect(base_url().'index.php/liquidaciones/home'); 
           }else{
              $dataUser['mensaje']="usuario invalido"; 
              $datos['mensaje']="usuario invalido"; 
              $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
              $datos['base_url2']=base_url();            
              $this->load->view('frm_login',$datos);
           }


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
