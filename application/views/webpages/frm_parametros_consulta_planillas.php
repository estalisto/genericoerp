
<?php
if (!isset($this->session->userdata['logged_in'])) {

header("location: ".base_url()."index.php/login");
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Parámetros de Consulta de Actas
        </h1>

        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    

    <section class="content">
       
        <div class="panel panel-default panel-body" >
            <a  href="#det_parametro" data-toggle="modal" class="button btn  btn-success  text-bold">Crear Nuevo +</a>
            
            <table id="myTable-planilla" class="table table-striped table-bordered table-hover display nowrap dataTable no-footer" role="grid" aria-describedby="myTable-planilla_info">
            <thead style="background-color: #04496d; color: #b1dbf5;">
                <tr class="primary" role="row"><th class="sorting_asc" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 51px;" aria-sort="ascending" aria-label="Planilla: activate to sort column descending"><center>Planilla</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 79px;" aria-label="Fecha Inicio: activate to sort column ascending"><center>Fecha Inicio</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 63px;" aria-label="Fecha Fin: activate to sort column ascending"><center>Fecha Fin</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 91px;" aria-label="CONTRATISTA: activate to sort column ascending"><center>CONTRATISTA</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 119px;" aria-label="Fiscalizador EPAM: activate to sort column ascending"><center>Fiscalizador EPAM</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 123px;" aria-label="Supervisor VEOLIA: activate to sort column ascending"><center>Supervisor VEOLIA</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 59px;" aria-label="Contrato: activate to sort column ascending"><center>Contrato</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 46px;" aria-label="Estado: activate to sort column ascending"><center>Estado</center></th><th class="sorting" tabindex="0" aria-controls="myTable-planilla" rowspan="1" colspan="1" style="width: 129px;" aria-label="Acciones: activate to sort column ascending"><center>Acciones</center></th></tr>
            </thead>
            <tbody>
            	                
	                            
                                
            <tr style="background-color: #F5F5DC; color: #000;" role="row" class="odd">
                    <!--<td><center><h6>9</center></h6></td>-->
                    <td class="sorting_1"><center><h6>15</h6></center></td>
                    <td><h6>2018-11-26</h6></td>
                    <td><h6>2019-01-25</h6></td>
                    <td><h6>CONSORCIO VEOLIA</h6></td>
                    <td><h6>MARCELO FLORES</h6></td>
                    <td><h6>GEMA ZAMBRANO</h6></td>
                    <td><center><h6>22</h6></center></td>
                    <td><center><h6>ACTIVO</h6></center></td>
                    <td style="text-align: center " width="15%">
                        <button data-toggle="tooltip" title="Editar" id="editarPlanilla" type="button" onclick="accionPlanilla('9','A')" class="btn btn-sm btn-success">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </button>  
                        <button data-toggle="tooltip" title="Visualizar" onclick="accionPlanilla('9','V')" type="button" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </button>
			<!-- ini SGRANDA - REQ 2018-010033 -  INACTIVA EL PARAMETRO  -->
                        <button data-toggle="tooltip" title="Visualizar" onclick="eliminarConfigPlanilla(9);" type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
			<!--fin SGRANDA - REQ 2018-010033 -  INACTIVA EL PARAMETRO  -->
                      <input id="verificaPlanilla" type="hidden" value="reg">
                    </td>
                </tr></tbody>
        </table>            
        </div>
      
    </section>
</div>   

<div id="det_parametro"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="detalle_articulo">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <br>
                                                <center><h2>Registrar Parámetro de Consulta de Actas</h2></center>           
            <form class="form-horizontal" role="form" id="formPlanilla">
                   
                <div class="content"> 
                                        
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Planilla:</label>
                      <div class="col-sm-9">
                          <input type="number" class="form-control" id="nPlanilla" >
                      </div>
                    </div>  
                    
                    <div class="form-group" id="divPorc">
                      <label class="control-label col-sm-3" >Fecha Inicio:</label>
                      <div class="col-sm-9">
                          <input type="date" class="form-control" id="nFechaInicio" required>
                      </div>
                    </div> 

                    <div class="form-group" id="divCant" >
                      <label class="control-label col-sm-3" >Fecha Fin:</label>
                      <div class="col-sm-9"> 
                          <input type="date" class="form-control" id="nFechaFin" required>
                      </div>
                    </div>
                    
                    <div class="form-group" id="divTotal">
                      <label class="control-label col-sm-3" >Contratista: </label>
                      <div class="col-sm-9"> 
                          <input type="text" class="form-control" style="text-transform:uppercase;" id="nContratista" required>
                      </div>
                    </div> 

                    <div class="form-group" id="divTotal">
                      <label class="control-label col-sm-3" >Fiscalizador EPAM:</label>
                      <div class="col-sm-9"> 
                          <input type="text" class="form-control" style="text-transform:uppercase;" id="nFiscalizadorEpam" required>
                      </div>
                    </div>      

                    <div class="form-group">
                      <label class="control-label col-sm-3" >Supervisor VEOLIA:</label>
                      <div class="col-sm-9"> 
                          <input type="text"  class="form-control" id="nSupervisorVeolia" style="text-transform:uppercase;" required >
                      </div>
                    </div> 
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Contrato:</label>
                      <div class="col-sm-9"> 
                          <input type="number"  class="form-control" id="nContrato"  required >
                      </div>
                    </div> 
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Estado:</label>
                      <div class="col-sm-9"> 
                          <input type="text"  class="form-control" id="nEstado" value="Activo" disabled  >
                      </div>
                    </div>        
                    <div class="form-group"> 
                         <div class="col-sm-12" style="text-align:right"  >
                             <button id="guardarPlanilla" type="submit" class="btn btn-primary btn-responsive btninter right btn-sm"> <span style="color:#000;" class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>&nbsp;Guardar</button>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal"><span style="color:#FF0000;" class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Salir</button> 
                        </div>
                    </div> 
                    
                 </div>
            </form>
            
 
                                            </div>      
                                        </div>
                                    </div>  


<script>
/*
nPlanilla
nFechaInicio
nFechaFin
nContratista
nFiscalizadorEpam
nSupervisorVeolia
nContrato
nEstado
 */
function registra_parametros(){
    var nPlanilla=$("#nPlanilla").val();
    var nFechaInicio=$("#nFechaInicio").val();
    var nFechaFin=$("#nFechaFin").val();
    var nContratista=$("#nContratista").val();
    var nFiscalizadorEpam=$("#nFiscalizadorEpam").val();
    var nSupervisorVeolia=$("#nSupervisorVeolia").val();
    var nContrato=$("#nContrato").val();
    var nEstado=$("#nEstado").val();
    
    if(nEstado==="ACTIVO"){
       nEstado="A";
        return;
    }
    if(nPlanilla===""){
        alert("Debe Ingresar el N° de la Planilla a parametrizar");
        return;
    }
    if(nFechaInicio===""){
        alert("Debe Ingresar la fecha de Inicio de las OT a liquidar.");
        return;
    }
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    
    if(nContratista===""){
        alert("Debe Ingresar el ID del contratista.");
        return;
    }
    
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    
    if(nFechaFin===""){
        alert("Debe Ingresar la fecha de fin de la consulta de OT a liquidar.");
        return;
    }
    if(repete_key.toString() !== new_key.toString()){
        alert("Las nuevas credenciales deben coincidir...");
        return;
    }
    
      var parametros = {
        "usuario":usuario,
            "clave":clave,
            "new_key":new_key,
            "repete_key":repete_key 

    };
    $.ajax({
        data: parametros,
        url:  '<?php echo base_url();?>index.php/cambiarcontrasenia/valida',
        type: 'POST',
        beforeSend: function () {
        },
        success: function (response) {
           $("#mensaje").show();
           $("#mensaje").html('<div class="alert alert-success">'+response.toString()+' </div>');
           $("#mensaje").delay(3000).hide(0);
            document.getElementById("username").value="";
            document.getElementById("password").value="";
            document.getElementById("nueva_clave").value="";
            document.getElementById("repite_clave").value="";
        },error: function(jqXHR, textStatus, errorThrown){
           $("#mensaje").show();
           $("#mensaje").html('<div class="alert alert-warning">'+'Problemas al momento de enviar el cambio de credenciales'+' </div>');
        $("#mensaje").delay(3000).hede(0);
        }
    });
}
</script>