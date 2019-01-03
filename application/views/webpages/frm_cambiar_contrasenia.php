<?php
if (!isset($this->session->userdata['logged_in'])) {

header("location: ".base_url()."index.php/login");
}
$sesiondata=$this->session->userdata['logged_in'];

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

     <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
         <form id="formCambiaClave"  method="post">
     
              <div class="form-group has-feedback">  
                  <label> <center><h1>Usuario: <?php echo $sesiondata["usuario"]; ?> </h1></center></label>
                   
                </div> 
                <div class="form-group has-feedback" >  
                    <input type="text" name="username" id="username" class="form-control mi-input" placeholder="Contraseña Actual..." value=<?php echo $sesiondata["usuario"]; ?>  style="background-color:transparent; ">
                    <span class="glyphicon glyphicon-persona form-control-feedback"></span>
                   
                </div> 
             
                <div class="form-group has-feedback">  
                    <input type="password" name="password" id="contraseniaActual" class="form-control mi-input" placeholder="Contraseña Actual..." required style="background-color:transparent; ">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                   
                </div> 
           
             
                <div class="form-group has-feedback">  
                    <input type="password" name="nueva_clave" id="contraseniaC" class="form-control mi-input" placeholder="Nueva contraseña..." required style="background-color:transparent; ">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                </div> 
                
                <div class="form-group has-feedback">
                    <input type="password" name="repite_clave" id="repcontraseniaC" class="form-control mi-input" placeholder="Confirmar contraseña..." required  style="background-color:transparent;  ">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div id="validaCambio2">  
                </div>

                </div>
                
                
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" id="btnCambiarContraenia" class="btn btn-primary btn-block btn-flat">Cambiar Contraseña</button>
                        <div class="social-auth-links">
                        </div>
                    </div>
                </div>
                <div id="msg_infoCambio">
                    <h4>Se sugiere que la contraseña debe cumplir con lo siguientes estándares</h4>
                    <ul>
                       <li id="letter">Tener<strong> minímo de 8 carácteres</strong></li>
                       <li id="capital">Tener <strong>una letra </strong></li>
                       <li id="length">Tener <strong>un letra Mayúscula</strong></li>
                       <li id="number">Tener <strong>un número</strong></li>
                    </ul>
                 </div>
                        

</form>
<div id="mensaje"></div>
    </div >
    
</section>
</div>  

