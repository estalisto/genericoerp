<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: ".base_url()."/index.php/liquidaciones/home"); 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Veolia System</title>
        <link rel="shortcut icon" href="<?php echo base_url();?>dist/img/veolia.ico" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">
        <style>
            .mi-input::placeholder { color: #21618c  ; font-weight: bold; }
        </style>
    </head>
    <body background ='<?php echo base_url();?>dist/img/fondo.jpg' >

    
        <br>
          <section class = "container" >
         <center><img style = "width: 550px;" src = "<?php echo base_url();?>dist/img/principal.png">
            </center>
            <h1 align = "center" style = "color: #21618c ;" ><FONT SIZE = 20><FONT FACE = "Times New Roman">Liquidaciones</FONT></FONT></h1>
            <div class = "col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 ">               
                <br>
                <form method = "post" action="<?php echo base_url();?>index.php/login/valida_usuario"> 
                    <div >
        
                    <div class = "form-group has-feedback">
                        <input type = "text" name="username" id = "username" class = "form-control mi-input" placeholder = "Usuario..." required style = "background-color:transparent; ">
                        <span class = "glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class = "form-group has-feedback">
                        <input type = "password" name="password" id = "password" class = "form-control mi-input" placeholder = "Contraseña..." required style = "background-color:transparent;">
                        <span class = "glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

		     <div class = "form-group has-feedback">    
                        <div class="selector-ambiente">
                            <select class="form-control mi-input" name="idInstancia" id="idAmbiente" style = "background-color:transparent; width: 100%; color: #21618c  ; font-weight: bold;">
                             <option value="0">Seleccionar Ambiente</option>                              
                               <?php
                                foreach ($instancias as $midata){                               
                                    echo "<option value=".$midata['ID'].">".$midata['DESCRIPCION']."</option>";  
                                }                               
                                ?>
                                
                            </select>
                        </div>
                    </div>		    

                    <div class = "row">

                        <!--/.col -->
                        <div class = "col-xs-12">
                            <button type = "submit" class = "btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div>
                        <!--/.col -->
                    </div>
                    </div>
                </form>
                
                <div class = "social-auth-links text-center">
                    <p>Olvidaste tu contraseña? <a href = "recuperaClave.php">Click aquí para recuperarla.</a>.</p>
                </div>
            </div>   
        </section>
        <script src = "<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js"></script>
    
    </body>
</html>