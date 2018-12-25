	<?php
/**
* 
*/
class Mconsulta extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getActas(){
		//$query = $this->db->get_where('cn_actas');
		$query = $this->db->select('*');
		$query = $this->db->from('cn_actas');
		$query = $this->db->join('cn_actas_ordenes', 'cn_actas_ordenes.ID_ACTA = cn_actas.id_acta');
		$query = $this->db->where('cn_actas.id_acta', '142');	
		$query=$this->db->get();		
		return $query->result_array();
	}

	/*
	SELECT a.id_acta_orden,
                        a.id_orden,
                        CONCAT(a.id_tipo_orden,' - ',(SELECT descripcion FROM cn_tipos_ordenes c WHERE c.id_tipo_orden = a.id_tipo_orden )) descrip,
                        a.id_tipo_orden,
                                  SUBSTR((SELECT descripcion FROM cn_tipos_ordenes c WHERE c.id_tipo_orden = a.id_tipo_orden ),1,50) descrip_tipo,
                        a.fecha_asignacion, 
                        a.fecha_solicitud, 
                        a.fecha_ejecucion, 
                        a.fecha_legalizacion,
                        (SELECT SUM(b.valor_total) FROM cn_det_actas_ordenes b WHERE b.id_acta_orden = a.id_acta_orden ) total,
                        a.estado,
                        f.id_CONTRATO,
                        f.id_acta,
                        DATEDIFF(a.FECHA_FINALIZACION,a.FECHA_SOLICITUD)*24 TIEMPO_TRANSCURRIDO,
                        a.DIRECCION,
                        a.fecha_finalizacion
                  FROM cn_actas f , cn_actas_ordenes a
                  WHERE f.id_acta = a.ID_ACTA
                  AND   f.ID_ACTA= 142
	*/
}