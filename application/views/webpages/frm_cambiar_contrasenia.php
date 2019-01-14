<?php
if (!isset($this->session->userdata['logged_in'])) {

header("location: ".base_url()."index.php/login");
}
$sesiondata=$this->session->userdata['logged_in'];

?>
<div class="content-wrapper">
    <section class="content-header">
      

        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cambio Contraseña</li>
        </ol>
    </section>



<section class="content">
    <br>
     <div >
         <form action="#"  method="">
             
             <div class="panel panel-default well-sm">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="form-group has-feedback">  
                  <label> <center><h1>Cambio Calve de Acceso</h1></center></label>
                   
                </div> 
                <div class="form-group has-feedback" >  
                    <input type="text" name="username" id="username" class="form-control mi-input text-bold" placeholder="Contraseña Actual..." value=<?php echo $sesiondata["usuario"]; ?>  style="background-color:transparent; ">
                    <span class="glyphicon glyphicon-persona form-control-feedback"></span>
                   
                </div> 
             
                <div class="form-group has-feedback">  
                    <input type="password" name="password" id="password" class="form-control mi-input text-bold " placeholder="Contraseña Actual..." required style="background-color:transparent; ">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                   
                </div> 
           
             
                <div class="form-group has-feedback">  
                    <input type="password" name="nueva_clave" id="nueva_clave" class="form-control text-bold" placeholder="Nueva contraseña..." required  >
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                </div> 
                
                <div class="form-group has-feedback">
                    <input type="password" name="repite_clave" id="repite_clave" class="form-control text-bold" placeholder="Confirmar contraseña..." required  >
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div id="validaCambio2">  
                </div>

                </div>
                
                
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" onclick="valida_cambio_contrasenia();"  class="btn btn-primary btn-block btn-flat text-bold">Cambiar Contraseña</button>
                        <div class="social-auth-links">
                        </div>
                    </div>
                </div>
                         <div id="mensaje"></div>
                <div id="msg_infoCambio">
                    <h4 class="text-blue">Se sugiere que la contraseña debe cumplir con lo siguientes estándares</h4>
                    <ul>
                       <li id="letter"  class="text-red" >Tener<strong> minímo de 8 carácteres</strong></li>
                       <li id="capital" class="text-red" >Tener <strong>una letra </strong></li>
                       <li id="length" class="text-red">Tener <strong>un letra Mayúscula</strong></li>
                       <li id="number" class="text-red" >Tener <strong>un número</strong></li>
                    </ul>
                 </div>
                     </div>
                    
                    <div class="col-lg-6"></div>
                     
                 </div>
                 
                 
             </div>
              
                        

</form>

    </div >
    
</section>
</div>  
<script>

function valida_cambio_contrasenia(){
    var usuario=$("#username").val();
    var clave=$("#password").val();
    var new_key=$("#nueva_clave").val();
    var repete_key=$("#repite_clave").val();
    
    if(usuario===""){
        alert("Debe Ingresar el Usuario a Modificar la clave");
        return;
    }
    if(clave===""){
        alert("Debe Ingresar la clave actual");
        return;
    }
    if(new_key===""){
        alert("Debe Ingresar la nueva clave");
        return;
    }
    if(repete_key===""){
        alert("Debe volver a ingresar la nueva clave");
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

