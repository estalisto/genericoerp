<?php
class CambiarContrasenia extends CI_Controller{

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
		$this->load->view('webpages/frm_cambiar_contrasenia',$datos);
		$this->load->view('plantilla/frm_footer',$datos);
    }
    public function misDatos() {
          $datos['mensaje']="usuario invalido"; 
          $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
          $datos['base_url2']="http://localhost:82/genericoerp/";     
        return $datos;
    }
        
    public function valida() {
        
        $dataUser['usuario'] = $this->input->post('usuario');
        $dataUser['clave_actual'] = $this->input->post('clave_actual');
        $dataUser['nueva_clave'] = $this->input->post('nueva_clave');
        $dataUser['repite_clave'] = $this->input->post('repite_clave');

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

}

?>