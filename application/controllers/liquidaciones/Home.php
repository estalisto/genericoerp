<?php
class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mconsulta');
        $this->load->model('Mambientes');
        $this->load->model('Musuarios');
        $this->load->library('session');
       
    }

    public function index()
    {
            $datos['mensaje']="usuario invalido"; 
            $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
            $datos['base_url2']=base_url();   
            
                $this->load->view('plantilla/frm_cabecera',$datos);
		$this->load->view('plantilla/frm_menu',$datos);
		$this->load->view('webpages/frm_home',$datos);
		$this->load->view('plantilla/frm_footer',$datos);
    }
    public function misDatos() {
          $datos['mensaje']="usuario invalido"; 
          $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
          $datos['base_url2']="http://localhost:82/genericoerp/";     
        return $datos;
    }
        

}

?>