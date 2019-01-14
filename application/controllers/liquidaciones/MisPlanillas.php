<?php
class Misplanillas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mconsulta');
        $this->load->model('Mambientes');
        $this->load->model('Musuarios');
        $this->load->model('Mparametros');        
        $this->load->library('session');
       
    }

    public function index()
    {
            $datos['mensaje']="usuario invalido"; 
            $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
            $datos['base_url2']=base_url();   
            
                $this->load->view('plantilla/frm_cabecera',$datos);
		$this->load->view('plantilla/frm_menu',$datos);
		$this->load->view('webpages/frm_parametros_consulta_planillas',$datos);
		$this->load->view('plantilla/frm_footer',$datos);
    }
    public function misDatos() {
          $datos['mensaje']="usuario invalido"; 
          $datos['instancias']= $this->Mambientes->getInstanciasaAll(); 
          $datos['base_url2']=base_url();     
        return $datos;
    }
    public function CregistraParametros(){
        
        $parametros['listo']="ok";
        $result = $this->Mparametros->setRegistraParametro($param);
        if($parametros>0){
        echo "Registrado Exitosamente...";
        }else{
                    echo "Problemas para registrar el Parametro";

        }
        
        return ;
    }
        

}

?>