<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	
	function __construct(){
        parent::__construct();
        $this->load->model('Mconsulta');
        $this->load->model('Mambientes');
        $this->load->model('Musuarios');
       
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
            $datos = array('instancias' =>$this->Mambientes->getInstanciasaAll(),
                            'base_url2'=>"http://localhost:82/genericoerp/");
            
            $this->load->view('login',$datos);


	}
        public function valida_usuario()                  
	{
            $dataUser['usuario'] = $this->input->post('username');
            $dataUser['password'] = $this->input->post('password');
            
           $data = $this->Musuarios->getVerificaUser($dataUser);
           if($data){
              redirect('http://localhost:82/genericoerp/logueado'); 
           }


	}
        public function logueado()   
	{
           
            
            $this->load->view('logueado');


	}
        
}
