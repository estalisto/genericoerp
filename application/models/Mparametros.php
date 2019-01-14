<?php

class Mparametros extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function setRegistraParametro($param){
        $campos= array( 'ID_EMPRESA'    => $param['ID_EMPRESA'],
                        'ID_EMPRESA'    => $param['ID_EMPRESA'],
                        'FECHA_INICIO'  => $param['FECHA_INICIO'],
                        'FECHA_FIN'     => $param['FECHA_FIN'],
                        'CONTRATISTA'   => $param['CONTRATISTA'],
                        'FISCALIZADOR_EPAM' => $param['FISCALIZADOR_EPAM'],
                        'SUPERVSOR_VEOLIA'  => $param['SUPERVSOR_VEOLIA'],
                        'CONTRATO'      => $param['CONTRATO'],
                        'ESTADO'        => $param['ESTADO'],
                        'FECHA_CREA'    => $param['FECHA_CREA'],
                        'USUARIO_CREA'  => $param['USUARIO_CREA']);
        $this->db->insert('cn_parametros_liquidacion',$campos);
        return 1;
    }
    

}