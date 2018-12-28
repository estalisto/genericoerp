
<?php
if (!isset($this->session->userdata['logged_in'])) {

header("location: ".base_url()."index.php/login");
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Dashboard
        </h1>

        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    

    <section class="content">
        <div class="panel panel-default panel-body">
            <form class="form-horizontal" role="form" id="formPlanilla">
                    <input type="hidden" id="accion-modal" value="">
                    <input type="hidden" id="hPlanilla" value="">
                    <input type="hidden" id="hFechaInicio" value="">
                    <input type="hidden" id="hFechaFin" value="">
                    <input type="hidden" id="hContratista" value="">
                    <input type="hidden" id="hFiscalizadorEpam" value="">
                    <input type="hidden" id="hSupervisorVeolia" value="">
                    <input type="hidden" id="hContrato" value="">
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
                          <input type="text"  class="form-control" id="nEstado"   >
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
                      
        
    </section>
</div>    


