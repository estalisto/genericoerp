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
       
        $dataUser['usuario'] = $_POST['usuario'];
        $dataUser['password'] = $_POST['clave'];
        $dataUser['nueva_clave'] = $_POST['new_key'];
        $dataUser['repite_clave'] = $_POST['repete_key'];
        if ($dataUser['nueva_clave']==$dataUser['repite_clave']){
            $data = $this->Musuarios->getValidaUsuario($dataUser);
            if($data){                
                $list= $this->Musuarios->setRegistrarNuevaContrasenia($dataUser);   
                echo $list;                 
            }else{
                    echo "Usuario y Contraseña Incorrecta...";  
            }
        
        }

       return; 
        

  }

}

?>